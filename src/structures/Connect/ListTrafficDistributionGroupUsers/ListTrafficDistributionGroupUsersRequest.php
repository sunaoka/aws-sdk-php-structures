<?php

namespace Sunaoka\Aws\Structures\Connect\ListTrafficDistributionGroupUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficDistributionGroupId
 * @property int<1, 10> $MaxResults
 * @property string $NextToken
 */
class ListTrafficDistributionGroupUsersRequest extends Request
{
    /**
     * @param array{
     *     TrafficDistributionGroupId: string,
     *     MaxResults?: int<1, 10>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
