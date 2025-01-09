<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $InboundCalling
 * @property bool $OutboundCalling
 * @property bool $SMS
 */
class TelephonySettings extends Shape
{
    /**
     * @param array{
     *     InboundCalling: bool,
     *     OutboundCalling: bool,
     *     SMS: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
