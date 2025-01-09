<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksConfiguration $eksConfiguration
 */
class Source extends Shape
{
    /**
     * @param array{eksConfiguration?: EksConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
