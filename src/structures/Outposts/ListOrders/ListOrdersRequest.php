<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOrders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OutpostIdentifierFilter
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListOrdersRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifierFilter?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
