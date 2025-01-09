<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListDashboards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DashboardArn
 * @property 'MANAGED'|'CUSTOM' $Type
 */
class DashboardDetail extends Shape
{
    /**
     * @param array{
     *     DashboardArn?: string,
     *     Type?: 'MANAGED'|'CUSTOM'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
