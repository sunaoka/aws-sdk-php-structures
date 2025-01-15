<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListDashboards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DashboardArn
 * @property 'MANAGED'|'CUSTOM'|null $Type
 */
class DashboardDetail extends Shape
{
    /**
     * @param array{
     *     DashboardArn?: string|null,
     *     Type?: 'MANAGED'|'CUSTOM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
