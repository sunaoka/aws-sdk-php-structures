<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileName
 * @property TransformJobDefinition $TransformJobDefinition
 */
class ModelPackageValidationProfile extends Shape
{
    /**
     * @param array{
     *     ProfileName: string,
     *     TransformJobDefinition: TransformJobDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
