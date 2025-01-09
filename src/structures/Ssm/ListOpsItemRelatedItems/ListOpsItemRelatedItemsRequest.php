<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemRelatedItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpsItemId
 * @property list<Shapes\OpsItemRelatedItemsFilter> $Filters
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListOpsItemRelatedItemsRequest extends Request
{
    /**
     * @param array{
     *     OpsItemId?: string,
     *     Filters?: list<Shapes\OpsItemRelatedItemsFilter>,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
