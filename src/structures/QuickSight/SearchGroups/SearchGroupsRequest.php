<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $Namespace
 * @property list<Shapes\GroupSearchFilter> $Filters
 */
class SearchGroupsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     Namespace: string,
     *     Filters: list<Shapes\GroupSearchFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
