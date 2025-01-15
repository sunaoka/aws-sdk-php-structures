<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 */
class InputDeviceSettings extends Shape
{
    /**
     * @param array{Id?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
