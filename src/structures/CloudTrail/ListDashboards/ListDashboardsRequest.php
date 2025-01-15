<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NamePrefix
 * @property 'MANAGED'|'CUSTOM'|null $Type
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListDashboardsRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     Type?: 'MANAGED'|'CUSTOM'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
