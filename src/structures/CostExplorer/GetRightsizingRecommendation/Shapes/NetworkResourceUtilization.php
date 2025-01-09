<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInBytesPerSecond
 * @property string $NetworkOutBytesPerSecond
 * @property string $NetworkPacketsInPerSecond
 * @property string $NetworkPacketsOutPerSecond
 */
class NetworkResourceUtilization extends Shape
{
    /**
     * @param array{
     *     NetworkInBytesPerSecond?: string,
     *     NetworkOutBytesPerSecond?: string,
     *     NetworkPacketsInPerSecond?: string,
     *     NetworkPacketsOutPerSecond?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
