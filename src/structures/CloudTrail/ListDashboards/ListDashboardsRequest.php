<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property 'MANAGED'|'CUSTOM' $Type
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListDashboardsRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     Type?: 'MANAGED'|'CUSTOM',
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
