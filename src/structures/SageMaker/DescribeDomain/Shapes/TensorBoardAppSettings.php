<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec $DefaultResourceSpec
 */
class TensorBoardAppSettings extends Shape
{
    /**
     * @param array{DefaultResourceSpec?: ResourceSpec} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
