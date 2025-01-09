<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListDashboards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DashboardName
 * @property string $DashboardArn
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property int $Size
 */
class DashboardEntry extends Shape
{
    /**
     * @param array{
     *     DashboardName?: string,
     *     DashboardArn?: string,
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     Size?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
