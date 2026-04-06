<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolutionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $solutionVersionArn
 * @property string|null $solutionArn
 * @property bool|null $performHPO
 * @property bool|null $performAutoML
 * @property bool|null $performIncrementalUpdate
 * @property string|null $recipeArn
 * @property string|null $eventType
 * @property string|null $datasetGroupArn
 * @property SolutionConfig|null $solutionConfig
 * @property double|null $trainingHours
 * @property 'FULL'|'UPDATE'|'AUTOTRAIN'|null $trainingMode
 * @property TunedHPOParams|null $tunedHPOParams
 * @property string|null $status
 * @property string|null $failureReason
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property 'AUTOMATIC'|'MANUAL'|null $trainingType
 */
class SolutionVersion extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     solutionVersionArn?: string|null,
     *     solutionArn?: string|null,
     *     performHPO?: bool|null,
     *     performAutoML?: bool|null,
     *     performIncrementalUpdate?: bool|null,
     *     recipeArn?: string|null,
     *     eventType?: string|null,
     *     datasetGroupArn?: string|null,
     *     solutionConfig?: SolutionConfig|null,
     *     trainingHours?: double|null,
     *     trainingMode?: 'FULL'|'UPDATE'|'AUTOTRAIN'|null,
     *     tunedHPOParams?: TunedHPOParams|null,
     *     status?: string|null,
     *     failureReason?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     trainingType?: 'AUTOMATIC'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
