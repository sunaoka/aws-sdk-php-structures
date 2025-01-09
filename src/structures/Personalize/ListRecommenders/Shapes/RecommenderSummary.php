<?php

namespace Sunaoka\Aws\Structures\Personalize\ListRecommenders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $recommenderArn
 * @property string $datasetGroupArn
 * @property string $recipeArn
 * @property RecommenderConfig $recommenderConfig
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class RecommenderSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     recommenderArn?: string,
     *     datasetGroupArn?: string,
     *     recipeArn?: string,
     *     recommenderConfig?: RecommenderConfig,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
