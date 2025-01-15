<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeFlywheelIteration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FlywheelArn
 * @property string|null $FlywheelIterationId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'TRAINING'|'EVALUATING'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $Status
 * @property string|null $Message
 * @property string|null $EvaluatedModelArn
 * @property FlywheelModelEvaluationMetrics|null $EvaluatedModelMetrics
 * @property string|null $TrainedModelArn
 * @property FlywheelModelEvaluationMetrics|null $TrainedModelMetrics
 * @property string|null $EvaluationManifestS3Prefix
 */
class FlywheelIterationProperties extends Shape
{
    /**
     * @param array{
     *     FlywheelArn?: string|null,
     *     FlywheelIterationId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'TRAINING'|'EVALUATING'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null,
     *     Message?: string|null,
     *     EvaluatedModelArn?: string|null,
     *     EvaluatedModelMetrics?: FlywheelModelEvaluationMetrics|null,
     *     TrainedModelArn?: string|null,
     *     TrainedModelMetrics?: FlywheelModelEvaluationMetrics|null,
     *     EvaluationManifestS3Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
