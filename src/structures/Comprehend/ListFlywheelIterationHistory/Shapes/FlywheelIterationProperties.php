<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheelIterationHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlywheelArn
 * @property string $FlywheelIterationId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'TRAINING'|'EVALUATING'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $Status
 * @property string $Message
 * @property string $EvaluatedModelArn
 * @property FlywheelModelEvaluationMetrics $EvaluatedModelMetrics
 * @property string $TrainedModelArn
 * @property FlywheelModelEvaluationMetrics $TrainedModelMetrics
 * @property string $EvaluationManifestS3Prefix
 */
class FlywheelIterationProperties extends Shape
{
    /**
     * @param array{
     *     FlywheelArn?: string,
     *     FlywheelIterationId?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'TRAINING'|'EVALUATING'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED',
     *     Message?: string,
     *     EvaluatedModelArn?: string,
     *     EvaluatedModelMetrics?: FlywheelModelEvaluationMetrics,
     *     TrainedModelArn?: string,
     *     TrainedModelMetrics?: FlywheelModelEvaluationMetrics,
     *     EvaluationManifestS3Prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
