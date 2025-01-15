<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListScrapers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksConfiguration|null $eksConfiguration
 */
class Source extends Shape
{
    /**
     * @param array{eksConfiguration?: EksConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
