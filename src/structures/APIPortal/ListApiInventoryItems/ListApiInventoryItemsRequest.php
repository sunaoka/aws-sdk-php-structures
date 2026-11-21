<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListApiInventoryItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ApiInventoryFilters|null $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListApiInventoryItemsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ApiInventoryFilters|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
