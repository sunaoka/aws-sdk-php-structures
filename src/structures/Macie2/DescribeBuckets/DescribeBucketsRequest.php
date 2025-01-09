<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, Shapes\BucketCriteriaAdditionalProperties> $criteria
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\BucketSortCriteria $sortCriteria
 */
class DescribeBucketsRequest extends Request
{
    /**
     * @param array{
     *     criteria?: array<string, Shapes\BucketCriteriaAdditionalProperties>,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortCriteria?: Shapes\BucketSortCriteria
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
