<?php

namespace Youtubedl\Option;

class Format extends Base
{
    protected $allFormat;
    protected $format;
    protected $listFormats;
    protected $maxQuality;
    protected $preferFreeFormats;
    protected $youtubeSkipDashManifest;

    public function __toString()
    {
        return parent::format($this);
    }

    /**
     * Sets the value of format.
     *
     * @param mixed $format the format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Sets the value of allFormat.
     *
     * @param mixed $allFormat the all format
     *
     * @return self
     */
    public function setAllFormat($bool=true)
    {
        $this->allFormat = $bool;

        return $this;
    }

    /**
     * Sets the value of preferFreeFormats.
     *
     * @param mixed $preferFreeFormats the prefer free formats
     *
     * @return self
     */
    public function setPreferFreeFormats($bool=true)
    {
        $this->preferFreeFormats = $bool;

        return $this;
    }

    /**
     * Sets the value of maxQuality.
     *
     * @param mixed $maxQuality the max quality
     *
     * @return self
     */
    public function setMaxQuality($maxQuality)
    {
        $this->maxQuality = $maxQuality;

        return $this;
    }

    /**
     * Sets the value of listFormats.
     *
     * @param mixed $listFormats the list formats
     *
     * @return self
     */
    public function setListFormats($bool=true)
    {
        $this->listFormats = $bool;

        return $this;
    }

    /**
     * Sets the value of youtubeSkipDashManifest.
     *
     * @param mixed $youtubeSkipDashManifest the skip dash manifest
     *
     * @return self
     */
    public function setYoutubeSkipDashManifest($bool=true)
    {
        $this->youtubeSkipDashManifest = $bool;

        return $this;
    }
}
