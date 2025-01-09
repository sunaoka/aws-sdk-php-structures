<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Uarfcn
 * @property int $CellParams
 * @property int $UtranCid
 * @property int $Rscp
 * @property int $PathLoss
 */
class TdscdmaNmrObj extends Shape
{
    /**
     * @param array{
     *     Uarfcn: int,
     *     CellParams: int,
     *     UtranCid?: int,
     *     Rscp?: int,
     *     PathLoss?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
