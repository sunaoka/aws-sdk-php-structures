<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostAllocationTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Active'|'Inactive' $Status
 * @property list<string> $TagKeys
 * @property 'AWSGenerated'|'UserDefined' $Type
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListCostAllocationTagsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'Active'|'Inactive',
     *     TagKeys?: list<string>,
     *     Type?: 'AWSGenerated'|'UserDefined',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
