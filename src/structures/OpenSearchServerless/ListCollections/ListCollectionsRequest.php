<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListCollections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CollectionFilters $collectionFilters
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListCollectionsRequest extends Request
{
    /**
     * @param array{
     *     collectionFilters?: Shapes\CollectionFilters,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
