<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\WiFiAccessPoint>|null $WiFiAccessPoints
 * @property Shapes\CellTowers|null $CellTowers
 * @property Shapes\Ip|null $Ip
 * @property Shapes\Gnss|null $Gnss
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property Shapes\AdvancedConfiguration|null $AdvancedConfiguration
 */
class GetPositionEstimateRequest extends Request
{
    /**
     * @param array{
     *     WiFiAccessPoints?: list<Shapes\WiFiAccessPoint>|null,
     *     CellTowers?: Shapes\CellTowers|null,
     *     Ip?: Shapes\Ip|null,
     *     Gnss?: Shapes\Gnss|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     AdvancedConfiguration?: Shapes\AdvancedConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
