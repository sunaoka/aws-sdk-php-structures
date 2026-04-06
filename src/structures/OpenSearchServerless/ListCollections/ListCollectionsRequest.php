<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListCollections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CollectionFilters|null $collectionFilters
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCollectionsRequest extends Request
{
    /**
     * @param array{
     *     collectionFilters?: Shapes\CollectionFilters|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
