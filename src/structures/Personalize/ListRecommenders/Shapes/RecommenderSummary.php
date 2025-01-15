<?php

namespace Sunaoka\Aws\Structures\Personalize\ListRecommenders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $recommenderArn
 * @property string|null $datasetGroupArn
 * @property string|null $recipeArn
 * @property RecommenderConfig|null $recommenderConfig
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class RecommenderSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     recommenderArn?: string|null,
     *     datasetGroupArn?: string|null,
     *     recipeArn?: string|null,
     *     recommenderConfig?: RecommenderConfig|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
