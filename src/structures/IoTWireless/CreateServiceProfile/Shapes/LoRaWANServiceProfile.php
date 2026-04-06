<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateServiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AddGwMetadata
 * @property int<0, 15>|null $DrMin
 * @property int<0, 15>|null $DrMax
 * @property bool|null $PrAllowed
 * @property bool|null $RaAllowed
 */
class LoRaWANServiceProfile extends Shape
{
    /**
     * @param array{
     *     AddGwMetadata?: bool|null,
     *     DrMin?: int<0, 15>|null,
     *     DrMax?: int<0, 15>|null,
     *     PrAllowed?: bool|null,
     *     RaAllowed?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
