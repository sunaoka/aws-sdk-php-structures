<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInBytesPerSecond
 * @property string|null $NetworkOutBytesPerSecond
 * @property string|null $NetworkPacketsInPerSecond
 * @property string|null $NetworkPacketsOutPerSecond
 */
class NetworkResourceUtilization extends Shape
{
    /**
     * @param array{
     *     NetworkInBytesPerSecond?: string|null,
     *     NetworkOutBytesPerSecond?: string|null,
     *     NetworkPacketsInPerSecond?: string|null,
     *     NetworkPacketsOutPerSecond?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
