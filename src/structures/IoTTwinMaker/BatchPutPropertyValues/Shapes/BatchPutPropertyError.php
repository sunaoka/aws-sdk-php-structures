<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\BatchPutPropertyValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorCode
 * @property string $errorMessage
 * @property PropertyValueEntry $entry
 */
class BatchPutPropertyError extends Shape
{
    /**
     * @param array{
     *     errorCode: string,
     *     errorMessage: string,
     *     entry: PropertyValueEntry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
