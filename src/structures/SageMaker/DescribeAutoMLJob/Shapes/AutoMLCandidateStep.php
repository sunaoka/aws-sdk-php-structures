<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS::SageMaker::TrainingJob'|'AWS::SageMaker::TransformJob'|'AWS::SageMaker::ProcessingJob' $CandidateStepType
 * @property string $CandidateStepArn
 * @property string $CandidateStepName
 */
class AutoMLCandidateStep extends Shape
{
    /**
     * @param array{
     *     CandidateStepType: 'AWS::SageMaker::TrainingJob'|'AWS::SageMaker::TransformJob'|'AWS::SageMaker::ProcessingJob',
     *     CandidateStepArn: string,
     *     CandidateStepName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
