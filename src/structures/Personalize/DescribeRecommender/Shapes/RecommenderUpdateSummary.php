<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecommenderConfig|null $recommenderConfig
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $status
 * @property string|null $failureReason
 */
class RecommenderUpdateSummary extends Shape
{
    /**
     * @param array{
     *     recommenderConfig?: RecommenderConfig|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     status?: string|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
