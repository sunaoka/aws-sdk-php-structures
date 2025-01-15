<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINEAR'|null $interpolationType
 * @property int|null $intervalInSeconds
 */
class InterpolationParameters extends Shape
{
    /**
     * @param array{
     *     interpolationType?: 'LINEAR'|null,
     *     intervalInSeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
