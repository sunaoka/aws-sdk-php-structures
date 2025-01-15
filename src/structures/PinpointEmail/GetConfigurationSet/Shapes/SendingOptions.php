<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SendingEnabled
 */
class SendingOptions extends Shape
{
    /**
     * @param array{SendingEnabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
