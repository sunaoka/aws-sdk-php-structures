<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\WiFiAccessPoint> $WiFiAccessPoints
 * @property Shapes\CellTowers $CellTowers
 * @property Shapes\Ip $Ip
 * @property Shapes\Gnss $Gnss
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class GetPositionEstimateRequest extends Request
{
    /**
     * @param array{
     *     WiFiAccessPoints?: list<Shapes\WiFiAccessPoint>,
     *     CellTowers?: Shapes\CellTowers,
     *     Ip?: Shapes\Ip,
     *     Gnss?: Shapes\Gnss,
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
