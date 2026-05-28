<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelPackageArn
 */
class ModelPackageArnDataSource extends Shape
{
    /**
     * @param array{modelPackageArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
