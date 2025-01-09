<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SendingEnabled
 */
class SendingOptions extends Shape
{
    /**
     * @param array{SendingEnabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
