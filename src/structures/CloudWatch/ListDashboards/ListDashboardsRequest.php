<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DashboardNamePrefix
 * @property string $NextToken
 */
class ListDashboardsRequest extends Request
{
    /**
     * @param array{
     *     DashboardNamePrefix?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
