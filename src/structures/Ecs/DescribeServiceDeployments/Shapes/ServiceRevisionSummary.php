<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property int|null $requestedTaskCount
 * @property int|null $runningTaskCount
 * @property int|null $pendingTaskCount
 * @property double|null $requestedTestTrafficWeight
 * @property double|null $requestedProductionTrafficWeight
 */
class ServiceRevisionSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     requestedTaskCount?: int|null,
     *     runningTaskCount?: int|null,
     *     pendingTaskCount?: int|null,
     *     requestedTestTrafficWeight?: double|null,
     *     requestedProductionTrafficWeight?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
