<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolutionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $solutionVersionArn
 * @property string $solutionArn
 * @property bool $performHPO
 * @property bool $performAutoML
 * @property string $recipeArn
 * @property string $eventType
 * @property string $datasetGroupArn
 * @property SolutionConfig $solutionConfig
 * @property double $trainingHours
 * @property 'FULL'|'UPDATE'|'AUTOTRAIN' $trainingMode
 * @property TunedHPOParams $tunedHPOParams
 * @property string $status
 * @property string $failureReason
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property 'AUTOMATIC'|'MANUAL' $trainingType
 */
class SolutionVersion extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     solutionVersionArn?: string,
     *     solutionArn?: string,
     *     performHPO?: bool,
     *     performAutoML?: bool,
     *     recipeArn?: string,
     *     eventType?: string,
     *     datasetGroupArn?: string,
     *     solutionConfig?: SolutionConfig,
     *     trainingHours?: double,
     *     trainingMode?: 'FULL'|'UPDATE'|'AUTOTRAIN',
     *     tunedHPOParams?: TunedHPOParams,
     *     status?: string,
     *     failureReason?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     trainingType?: 'AUTOMATIC'|'MANUAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
