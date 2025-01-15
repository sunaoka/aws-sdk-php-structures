<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Platform'|'Vpc' $TrainingRepositoryAccessMode
 * @property TrainingRepositoryAuthConfig|null $TrainingRepositoryAuthConfig
 */
class TrainingImageConfig extends Shape
{
    /**
     * @param array{
     *     TrainingRepositoryAccessMode: 'Platform'|'Vpc',
     *     TrainingRepositoryAuthConfig?: TrainingRepositoryAuthConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
