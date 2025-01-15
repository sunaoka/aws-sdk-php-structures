<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListCollections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CollectionFilters|null $collectionFilters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListCollectionsRequest extends Request
{
    /**
     * @param array{
     *     collectionFilters?: Shapes\CollectionFilters|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
