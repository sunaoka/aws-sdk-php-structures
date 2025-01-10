<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $configurationBlob
 */
class ScrapeConfiguration extends Shape
{
    /**
     * @param array{configurationBlob?: string|resource|\Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
