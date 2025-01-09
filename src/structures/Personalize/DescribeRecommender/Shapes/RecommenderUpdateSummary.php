<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecommenderConfig $recommenderConfig
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $status
 * @property string $failureReason
 */
class RecommenderUpdateSummary extends Shape
{
    /**
     * @param array{
     *     recommenderConfig?: RecommenderConfig,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     status?: string,
     *     failureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
