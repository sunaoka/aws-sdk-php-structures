<?php

namespace Sunaoka\Aws\Structures\QApps\ListLibraryItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property int<1, 100> $limit
 * @property string $nextToken
 * @property string $categoryId
 */
class ListLibraryItemsRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     limit?: int<1, 100>,
     *     nextToken?: string,
     *     categoryId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
