<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string|null $KmsKeyArn
 */
class TrainingSessionS3Location extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
