<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINEAR' $interpolationType
 * @property int $intervalInSeconds
 */
class InterpolationParameters extends Shape
{
    /**
     * @param array{
     *     interpolationType?: 'LINEAR',
     *     intervalInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
