<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOrders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifierFilter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListOrdersRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifierFilter?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
