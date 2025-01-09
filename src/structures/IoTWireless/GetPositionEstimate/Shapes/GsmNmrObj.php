<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Bsic
 * @property int $Bcch
 * @property int $RxLevel
 * @property GlobalIdentity $GlobalIdentity
 */
class GsmNmrObj extends Shape
{
    /**
     * @param array{
     *     Bsic: int,
     *     Bcch: int,
     *     RxLevel?: int,
     *     GlobalIdentity?: GlobalIdentity
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
