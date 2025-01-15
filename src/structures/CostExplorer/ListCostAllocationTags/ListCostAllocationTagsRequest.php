<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostAllocationTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Active'|'Inactive'|null $Status
 * @property list<string>|null $TagKeys
 * @property 'AWSGenerated'|'UserDefined'|null $Type
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListCostAllocationTagsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'Active'|'Inactive'|null,
     *     TagKeys?: list<string>|null,
     *     Type?: 'AWSGenerated'|'UserDefined'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
