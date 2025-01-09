<?php

namespace Sunaoka\Aws\Structures\Connect\ListTrafficDistributionGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10> $MaxResults
 * @property string $NextToken
 * @property string $InstanceId
 */
class ListTrafficDistributionGroupsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 10>,
     *     NextToken?: string,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
