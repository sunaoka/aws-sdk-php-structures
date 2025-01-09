<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property TrainingJob $TrainingJob
 * @property ProcessingJob $ProcessingJob
 * @property TransformJob $TransformJob
 */
class TrialComponentSourceDetail extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string,
     *     TrainingJob?: TrainingJob,
     *     ProcessingJob?: ProcessingJob,
     *     TransformJob?: TransformJob
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
