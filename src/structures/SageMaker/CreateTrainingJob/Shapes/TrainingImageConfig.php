<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Platform'|'Vpc' $TrainingRepositoryAccessMode
 * @property TrainingRepositoryAuthConfig $TrainingRepositoryAuthConfig
 */
class TrainingImageConfig extends Shape
{
    /**
     * @param array{
     *     TrainingRepositoryAccessMode: 'Platform'|'Vpc',
     *     TrainingRepositoryAuthConfig?: TrainingRepositoryAuthConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
