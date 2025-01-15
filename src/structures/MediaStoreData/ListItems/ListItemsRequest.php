<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\ListItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Path
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListItemsRequest extends Request
{
    /**
     * @param array{
     *     Path?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
