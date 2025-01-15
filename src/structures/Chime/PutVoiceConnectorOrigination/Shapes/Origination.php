<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorOrigination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OriginationRoute>|null $Routes
 * @property bool|null $Disabled
 */
class Origination extends Shape
{
    /**
     * @param array{
     *     Routes?: list<OriginationRoute>|null,
     *     Disabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
