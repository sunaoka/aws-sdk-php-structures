<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelPackageArnDataSource|null $modelPackageArnDataSource
 */
class CustomModelDataSource extends Shape
{
    /**
     * @param array{modelPackageArnDataSource?: ModelPackageArnDataSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
