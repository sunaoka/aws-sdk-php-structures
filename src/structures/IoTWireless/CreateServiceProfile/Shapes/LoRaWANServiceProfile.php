<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateServiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AddGwMetadata
 * @property int $DrMin
 * @property int $DrMax
 * @property bool $PrAllowed
 * @property bool $RaAllowed
 */
class LoRaWANServiceProfile extends Shape
{
    /**
     * @param array{
     *     AddGwMetadata?: bool,
     *     DrMin?: int,
     *     DrMax?: int,
     *     PrAllowed?: bool,
     *     RaAllowed?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
