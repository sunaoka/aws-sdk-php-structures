<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRulePreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property int|null $sizeInGib
 * @property int|null $iops
 * @property int|null $throughput
 */
class EbsVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     sizeInGib?: int|null,
     *     iops?: int|null,
     *     throughput?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
