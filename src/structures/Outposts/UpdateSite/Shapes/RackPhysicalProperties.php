<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateSite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POWER_5_KVA'|'POWER_10_KVA'|'POWER_15_KVA'|'POWER_30_KVA'|null $PowerDrawKva
 * @property 'SINGLE_PHASE'|'THREE_PHASE'|null $PowerPhase
 * @property 'L6_30P'|'IEC309'|'AH530P7W'|'AH532P6W'|'CS8365C'|null $PowerConnector
 * @property 'ABOVE_RACK'|'BELOW_RACK'|null $PowerFeedDrop
 * @property 'UPLINK_1G'|'UPLINK_10G'|'UPLINK_40G'|'UPLINK_100G'|null $UplinkGbps
 * @property 'UPLINK_COUNT_1'|'UPLINK_COUNT_2'|'UPLINK_COUNT_3'|'UPLINK_COUNT_4'|'UPLINK_COUNT_5'|'UPLINK_COUNT_6'|'UPLINK_COUNT_7'|'UPLINK_COUNT_8'|'UPLINK_COUNT_12'|'UPLINK_COUNT_16'|null $UplinkCount
 * @property 'SINGLE_MODE'|'MULTI_MODE'|null $FiberOpticCableType
 * @property 'OPTIC_10GBASE_SR'|'OPTIC_10GBASE_IR'|'OPTIC_10GBASE_LR'|'OPTIC_40GBASE_SR'|'OPTIC_40GBASE_ESR'|'OPTIC_40GBASE_IR4_LR4L'|'OPTIC_40GBASE_LR4'|'OPTIC_100GBASE_SR4'|'OPTIC_100GBASE_CWDM4'|'OPTIC_100GBASE_LR4'|'OPTIC_100G_PSM4_MSA'|'OPTIC_1000BASE_LX'|'OPTIC_1000BASE_SX'|null $OpticalStandard
 * @property 'NO_LIMIT'|'MAX_1400_LBS'|'MAX_1600_LBS'|'MAX_1800_LBS'|'MAX_2000_LBS'|null $MaximumSupportedWeightLbs
 */
class RackPhysicalProperties extends Shape
{
    /**
     * @param array{
     *     PowerDrawKva?: 'POWER_5_KVA'|'POWER_10_KVA'|'POWER_15_KVA'|'POWER_30_KVA'|null,
     *     PowerPhase?: 'SINGLE_PHASE'|'THREE_PHASE'|null,
     *     PowerConnector?: 'L6_30P'|'IEC309'|'AH530P7W'|'AH532P6W'|'CS8365C'|null,
     *     PowerFeedDrop?: 'ABOVE_RACK'|'BELOW_RACK'|null,
     *     UplinkGbps?: 'UPLINK_1G'|'UPLINK_10G'|'UPLINK_40G'|'UPLINK_100G'|null,
     *     UplinkCount?: 'UPLINK_COUNT_1'|'UPLINK_COUNT_2'|'UPLINK_COUNT_3'|'UPLINK_COUNT_4'|'UPLINK_COUNT_5'|'UPLINK_COUNT_6'|'UPLINK_COUNT_7'|'UPLINK_COUNT_8'|'UPLINK_COUNT_12'|'UPLINK_COUNT_16'|null,
     *     FiberOpticCableType?: 'SINGLE_MODE'|'MULTI_MODE'|null,
     *     OpticalStandard?: 'OPTIC_10GBASE_SR'|'OPTIC_10GBASE_IR'|'OPTIC_10GBASE_LR'|'OPTIC_40GBASE_SR'|'OPTIC_40GBASE_ESR'|'OPTIC_40GBASE_IR4_LR4L'|'OPTIC_40GBASE_LR4'|'OPTIC_100GBASE_SR4'|'OPTIC_100GBASE_CWDM4'|'OPTIC_100GBASE_LR4'|'OPTIC_100G_PSM4_MSA'|'OPTIC_1000BASE_LX'|'OPTIC_1000BASE_SX'|null,
     *     MaximumSupportedWeightLbs?: 'NO_LIMIT'|'MAX_1400_LBS'|'MAX_1600_LBS'|'MAX_1800_LBS'|'MAX_2000_LBS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
