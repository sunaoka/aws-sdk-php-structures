<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GsmObj>|null $Gsm
 * @property list<WcdmaObj>|null $Wcdma
 * @property list<TdscdmaObj>|null $Tdscdma
 * @property list<LteObj>|null $Lte
 * @property list<CdmaObj>|null $Cdma
 */
class CellTowers extends Shape
{
    /**
     * @param array{
     *     Gsm?: list<GsmObj>|null,
     *     Wcdma?: list<WcdmaObj>|null,
     *     Tdscdma?: list<TdscdmaObj>|null,
     *     Lte?: list<LteObj>|null,
     *     Cdma?: list<CdmaObj>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
