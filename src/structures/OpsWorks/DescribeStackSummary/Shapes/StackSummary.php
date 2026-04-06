<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStackSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackId
 * @property string|null $Name
 * @property string|null $Arn
 * @property int|null $LayersCount
 * @property int|null $AppsCount
 * @property InstancesCount|null $InstancesCount
 */
class StackSummary extends Shape
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     Name?: string|null,
     *     Arn?: string|null,
     *     LayersCount?: int|null,
     *     AppsCount?: int|null,
     *     InstancesCount?: InstancesCount|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
