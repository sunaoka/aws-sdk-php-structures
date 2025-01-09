<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'sagemaker_distribution' $SageMakerImageName
 * @property list<string> $VersionAliases
 */
class HiddenSageMakerImage extends Shape
{
    /**
     * @param array{
     *     SageMakerImageName?: 'sagemaker_distribution',
     *     VersionAliases?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
