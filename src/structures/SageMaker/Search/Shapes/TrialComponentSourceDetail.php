<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceArn
 * @property TrainingJob|null $TrainingJob
 * @property ProcessingJob|null $ProcessingJob
 * @property TransformJob|null $TransformJob
 */
class TrialComponentSourceDetail extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string|null,
     *     TrainingJob?: TrainingJob|null,
     *     ProcessingJob?: ProcessingJob|null,
     *     TransformJob?: TransformJob|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
