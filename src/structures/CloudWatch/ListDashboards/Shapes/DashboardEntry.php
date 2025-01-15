<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListDashboards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DashboardName
 * @property string|null $DashboardArn
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property int|null $Size
 */
class DashboardEntry extends Shape
{
    /**
     * @param array{
     *     DashboardName?: string|null,
     *     DashboardArn?: string|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     Size?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
