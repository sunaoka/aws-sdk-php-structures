<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemRelatedItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OpsItemId
 * @property list<Shapes\OpsItemRelatedItemsFilter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListOpsItemRelatedItemsRequest extends Request
{
    /**
     * @param array{
     *     OpsItemId?: string|null,
     *     Filters?: list<Shapes\OpsItemRelatedItemsFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
