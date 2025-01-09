<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\BatchPutPropertyValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BatchPutPropertyError> $errors
 */
class BatchPutPropertyErrorEntry extends Shape
{
    /**
     * @param array{errors: list<BatchPutPropertyError>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
