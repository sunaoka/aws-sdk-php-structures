<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SearchResourcesBucketCriteria|null $bucketCriteria
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\SearchResourcesSortCriteria|null $sortCriteria
 */
class SearchResourcesRequest extends Request
{
    /**
     * @param array{
     *     bucketCriteria?: Shapes\SearchResourcesBucketCriteria|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     sortCriteria?: Shapes\SearchResourcesSortCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
