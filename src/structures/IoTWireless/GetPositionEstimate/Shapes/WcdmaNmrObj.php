<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Uarfcndl
 * @property int $Psc
 * @property int $UtranCid
 * @property int $Rscp
 * @property int $PathLoss
 */
class WcdmaNmrObj extends Shape
{
    /**
     * @param array{
     *     Uarfcndl: int,
     *     Psc: int,
     *     UtranCid: int,
     *     Rscp?: int,
     *     PathLoss?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
