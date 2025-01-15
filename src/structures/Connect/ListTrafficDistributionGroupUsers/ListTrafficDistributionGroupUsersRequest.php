<?php

namespace Sunaoka\Aws\Structures\Connect\ListTrafficDistributionGroupUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficDistributionGroupId
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTrafficDistributionGroupUsersRequest extends Request
{
    /**
     * @param array{
     *     TrafficDistributionGroupId: string,
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
