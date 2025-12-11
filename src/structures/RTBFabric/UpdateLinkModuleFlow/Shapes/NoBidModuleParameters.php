<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLinkModuleFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reason
 * @property int<0, 10>|null $reasonCode
 * @property float|null $passThroughPercentage
 */
class NoBidModuleParameters extends Shape
{
    /**
     * @param array{
     *     reason?: string|null,
     *     reasonCode?: int<0, 10>|null,
     *     passThroughPercentage?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
