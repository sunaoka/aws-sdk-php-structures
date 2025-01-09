<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorOrigination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OriginationRoute> $Routes
 * @property bool $Disabled
 */
class Origination extends Shape
{
    /**
     * @param array{
     *     Routes?: list<OriginationRoute>,
     *     Disabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
