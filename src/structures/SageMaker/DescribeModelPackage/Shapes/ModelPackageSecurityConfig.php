<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 */
class ModelPackageSecurityConfig extends Shape
{
    /**
     * @param array{KmsKeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
