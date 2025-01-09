<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmpConfiguration $ampConfiguration
 */
class Destination extends Shape
{
    /**
     * @param array{ampConfiguration?: AmpConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
