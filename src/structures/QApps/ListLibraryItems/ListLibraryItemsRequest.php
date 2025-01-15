<?php

namespace Sunaoka\Aws\Structures\QApps\ListLibraryItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property int<1, 100>|null $limit
 * @property string|null $nextToken
 * @property string|null $categoryId
 */
class ListLibraryItemsRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     limit?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     categoryId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
