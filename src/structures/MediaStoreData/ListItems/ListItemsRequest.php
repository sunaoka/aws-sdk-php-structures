<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\ListItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListItemsRequest extends Request
{
    /**
     * @param array{
     *     Path?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
