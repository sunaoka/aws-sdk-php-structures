<?php

namespace Sunaoka\Aws\Structures\Connect\ListTrafficDistributionGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $InstanceId
 */
class ListTrafficDistributionGroupsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null,
     *     InstanceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
