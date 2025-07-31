<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateServiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AddGwMetadata
 * @property int<0, 15>|null $DrMin
 * @property int<0, 15>|null $DrMax
 * @property bool|null $PrAllowed
 * @property bool|null $RaAllowed
 * @property int<0, 15>|null $TxPowerIndexMin
 * @property int<0, 15>|null $TxPowerIndexMax
 * @property int<0, 15>|null $NbTransMin
 * @property int<0, 15>|null $NbTransMax
 */
class LoRaWANServiceProfile extends Shape
{
    /**
     * @param array{
     *     AddGwMetadata?: bool|null,
     *     DrMin?: int<0, 15>|null,
     *     DrMax?: int<0, 15>|null,
     *     PrAllowed?: bool|null,
     *     RaAllowed?: bool|null,
     *     TxPowerIndexMin?: int<0, 15>|null,
     *     TxPowerIndexMax?: int<0, 15>|null,
     *     NbTransMin?: int<0, 15>|null,
     *     NbTransMax?: int<0, 15>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
