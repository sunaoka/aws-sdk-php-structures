<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\ListItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListItemsRequest extends Request
{
    /**
     * @param array{
     *     Path?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
