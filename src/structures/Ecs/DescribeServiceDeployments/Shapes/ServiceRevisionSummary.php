<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property int $requestedTaskCount
 * @property int $runningTaskCount
 * @property int $pendingTaskCount
 */
class ServiceRevisionSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     requestedTaskCount?: int,
     *     runningTaskCount?: int,
     *     pendingTaskCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
