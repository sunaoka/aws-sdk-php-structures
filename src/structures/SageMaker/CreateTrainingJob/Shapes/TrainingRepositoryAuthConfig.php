<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingRepositoryCredentialsProviderArn
 */
class TrainingRepositoryAuthConfig extends Shape
{
    /**
     * @param array{TrainingRepositoryCredentialsProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
