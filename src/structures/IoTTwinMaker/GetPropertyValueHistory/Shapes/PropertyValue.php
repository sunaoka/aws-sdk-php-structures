<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $timestamp
 * @property DataValue $value
 * @property string|null $time
 */
class PropertyValue extends Shape
{
    /**
     * @param array{
     *     timestamp?: \Aws\Api\DateTimeResult|null,
     *     value: DataValue,
     *     time?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
