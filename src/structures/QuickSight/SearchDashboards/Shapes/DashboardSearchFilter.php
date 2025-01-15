<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDashboards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals'|'StringLike' $Operator
 * @property 'QUICKSIGHT_USER'|'QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DASHBOARD_NAME'|null $Name
 * @property string|null $Value
 */
class DashboardSearchFilter extends Shape
{
    /**
     * @param array{
     *     Operator: 'StringEquals'|'StringLike',
     *     Name?: 'QUICKSIGHT_USER'|'QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DASHBOARD_NAME'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
