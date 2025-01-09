<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStackSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $Name
 * @property string $Arn
 * @property int $LayersCount
 * @property int $AppsCount
 * @property InstancesCount $InstancesCount
 */
class StackSummary extends Shape
{
    /**
     * @param array{
     *     StackId?: string,
     *     Name?: string,
     *     Arn?: string,
     *     LayersCount?: int,
     *     AppsCount?: int,
     *     InstancesCount?: InstancesCount
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
