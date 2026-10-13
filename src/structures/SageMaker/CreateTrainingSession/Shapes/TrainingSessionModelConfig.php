<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseModelArn
 * @property bool|null $AcceptEula
 */
class TrainingSessionModelConfig extends Shape
{
    /**
     * @param array{
     *     BaseModelArn: string,
     *     AcceptEula?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
