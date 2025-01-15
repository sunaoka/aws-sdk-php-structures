<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'sagemaker_distribution'|null $SageMakerImageName
 * @property list<string>|null $VersionAliases
 */
class HiddenSageMakerImage extends Shape
{
    /**
     * @param array{
     *     SageMakerImageName?: 'sagemaker_distribution'|null,
     *     VersionAliases?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
