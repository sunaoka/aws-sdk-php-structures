<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmpConfiguration|null $ampConfiguration
 * @property CloudWatchConfiguration|null $cloudWatchConfiguration
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     ampConfiguration?: AmpConfiguration|null,
     *     cloudWatchConfiguration?: CloudWatchConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
