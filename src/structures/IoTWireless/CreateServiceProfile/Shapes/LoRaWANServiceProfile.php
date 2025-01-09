<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateServiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AddGwMetadata
 * @property int<0, 15> $DrMin
 * @property int<0, 15> $DrMax
 * @property bool $PrAllowed
 * @property bool $RaAllowed
 */
class LoRaWANServiceProfile extends Shape
{
    /**
     * @param array{
     *     AddGwMetadata?: bool,
     *     DrMin?: int<0, 15>,
     *     DrMax?: int<0, 15>,
     *     PrAllowed?: bool,
     *     RaAllowed?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
