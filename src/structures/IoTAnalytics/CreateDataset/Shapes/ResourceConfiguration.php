<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACU_1'|'ACU_2' $computeType
 * @property int<1, 50> $volumeSizeInGB
 */
class ResourceConfiguration extends Shape
{
    /**
     * @param array{
     *     computeType: 'ACU_1'|'ACU_2',
     *     volumeSizeInGB: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
