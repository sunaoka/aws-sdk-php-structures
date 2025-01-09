<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 */
class InputDeviceRequest extends Shape
{
    /**
     * @param array{Id?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
