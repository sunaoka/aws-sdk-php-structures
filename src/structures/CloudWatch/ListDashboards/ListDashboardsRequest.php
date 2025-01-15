<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DashboardNamePrefix
 * @property string|null $NextToken
 */
class ListDashboardsRequest extends Request
{
    /**
     * @param array{
     *     DashboardNamePrefix?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
