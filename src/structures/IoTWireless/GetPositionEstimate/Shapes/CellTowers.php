<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GsmObj> $Gsm
 * @property list<WcdmaObj> $Wcdma
 * @property list<TdscdmaObj> $Tdscdma
 * @property list<LteObj> $Lte
 * @property list<CdmaObj> $Cdma
 */
class CellTowers extends Shape
{
    /**
     * @param array{
     *     Gsm?: list<GsmObj>,
     *     Wcdma?: list<WcdmaObj>,
     *     Tdscdma?: list<TdscdmaObj>,
     *     Lte?: list<LteObj>,
     *     Cdma?: list<CdmaObj>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
