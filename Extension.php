<?php

namespace Bolt\Extension\Bolt\BootstrapCarousel;

/**
 * Bootstrap Carousel
 *
 * @author Gawain Lynch <gawain.lynch@gmail.com>
 */
class Extension extends \Bolt\BaseExtension
{
    const NAME = 'Bootstrap Carousel';

    public function getName()
    {
        return Extension::NAME;
    }

    /**
     * Initialise
     */
    public function initialize()
    {
    }

    /**
     * Set up config defaults
     */
    protected function getDefaultConfig()
    {
        return array();
    }
}
