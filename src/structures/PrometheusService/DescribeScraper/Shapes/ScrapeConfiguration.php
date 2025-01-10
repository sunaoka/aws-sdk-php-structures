<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $configurationBlob
 */
class ScrapeConfiguration extends Shape
{
    /**
     * @param array{configurationBlob?: \Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
