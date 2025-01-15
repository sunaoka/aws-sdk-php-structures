<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $recommenderArn
 * @property string|null $datasetGroupArn
 * @property string|null $name
 * @property string|null $recipeArn
 * @property RecommenderConfig|null $recommenderConfig
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $status
 * @property string|null $failureReason
 * @property RecommenderUpdateSummary|null $latestRecommenderUpdate
 * @property array<string, double>|null $modelMetrics
 */
class Recommender extends Shape
{
    /**
     * @param array{
     *     recommenderArn?: string|null,
     *     datasetGroupArn?: string|null,
     *     name?: string|null,
     *     recipeArn?: string|null,
     *     recommenderConfig?: RecommenderConfig|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     status?: string|null,
     *     failureReason?: string|null,
     *     latestRecommenderUpdate?: RecommenderUpdateSummary|null,
     *     modelMetrics?: array<string, double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
