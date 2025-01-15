<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, Shapes\BucketCriteriaAdditionalProperties>|null $criteria
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\BucketSortCriteria|null $sortCriteria
 */
class DescribeBucketsRequest extends Request
{
    /**
     * @param array{
     *     criteria?: array<string, Shapes\BucketCriteriaAdditionalProperties>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     sortCriteria?: Shapes\BucketSortCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
