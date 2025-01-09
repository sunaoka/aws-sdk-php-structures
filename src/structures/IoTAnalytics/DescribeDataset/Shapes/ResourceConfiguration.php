<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACU_1'|'ACU_2' $computeType
 * @property int $volumeSizeInGB
 */
class ResourceConfiguration extends Shape
{
    /**
     * @param array{
     *     computeType: 'ACU_1'|'ACU_2',
     *     volumeSizeInGB: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
