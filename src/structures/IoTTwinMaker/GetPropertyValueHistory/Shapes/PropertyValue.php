<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property DataValue $value
 * @property string $time
 */
class PropertyValue extends Shape
{
    /**
     * @param array{
     *     timestamp?: \Aws\Api\DateTimeResult,
     *     value: DataValue,
     *     time?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
