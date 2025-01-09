<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommenderArn
 * @property string $datasetGroupArn
 * @property string $name
 * @property string $recipeArn
 * @property RecommenderConfig $recommenderConfig
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $status
 * @property string $failureReason
 * @property RecommenderUpdateSummary $latestRecommenderUpdate
 * @property array<string, double> $modelMetrics
 */
class Recommender extends Shape
{
    /**
     * @param array{
     *     recommenderArn?: string,
     *     datasetGroupArn?: string,
     *     name?: string,
     *     recipeArn?: string,
     *     recommenderConfig?: RecommenderConfig,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     status?: string,
     *     failureReason?: string,
     *     latestRecommenderUpdate?: RecommenderUpdateSummary,
     *     modelMetrics?: array<string, double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
