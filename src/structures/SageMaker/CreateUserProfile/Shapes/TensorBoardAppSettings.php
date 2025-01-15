<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 */
class TensorBoardAppSettings extends Shape
{
    /**
     * @param array{DefaultResourceSpec?: ResourceSpec|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
