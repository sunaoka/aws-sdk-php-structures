<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SearchResourcesBucketCriteria $bucketCriteria
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\SearchResourcesSortCriteria $sortCriteria
 */
class SearchResourcesRequest extends Request
{
    /**
     * @param array{
     *     bucketCriteria?: Shapes\SearchResourcesBucketCriteria,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortCriteria?: Shapes\SearchResourcesSortCriteria
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
