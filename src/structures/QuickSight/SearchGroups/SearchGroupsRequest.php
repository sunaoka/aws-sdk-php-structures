<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $Namespace
 * @property list<Shapes\GroupSearchFilter> $Filters
 */
class SearchGroupsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Namespace: string,
     *     Filters: list<Shapes\GroupSearchFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
