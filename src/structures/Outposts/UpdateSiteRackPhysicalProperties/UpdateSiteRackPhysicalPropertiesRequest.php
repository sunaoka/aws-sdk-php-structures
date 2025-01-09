<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateSiteRackPhysicalProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SiteId
 * @property 'POWER_5_KVA'|'POWER_10_KVA'|'POWER_15_KVA'|'POWER_30_KVA' $PowerDrawKva
 * @property 'SINGLE_PHASE'|'THREE_PHASE' $PowerPhase
 * @property 'L6_30P'|'IEC309'|'AH530P7W'|'AH532P6W'|'CS8365C' $PowerConnector
 * @property 'ABOVE_RACK'|'BELOW_RACK' $PowerFeedDrop
 * @property 'UPLINK_1G'|'UPLINK_10G'|'UPLINK_40G'|'UPLINK_100G' $UplinkGbps
 * @property 'UPLINK_COUNT_1'|'UPLINK_COUNT_2'|'UPLINK_COUNT_3'|'UPLINK_COUNT_4'|'UPLINK_COUNT_5'|'UPLINK_COUNT_6'|'UPLINK_COUNT_7'|'UPLINK_COUNT_8'|'UPLINK_COUNT_12'|'UPLINK_COUNT_16' $UplinkCount
 * @property 'SINGLE_MODE'|'MULTI_MODE' $FiberOpticCableType
 * @property 'OPTIC_10GBASE_SR'|'OPTIC_10GBASE_IR'|'OPTIC_10GBASE_LR'|'OPTIC_40GBASE_SR'|'OPTIC_40GBASE_ESR'|'OPTIC_40GBASE_IR4_LR4L'|'OPTIC_40GBASE_LR4'|'OPTIC_100GBASE_SR4'|'OPTIC_100GBASE_CWDM4'|'OPTIC_100GBASE_LR4'|'OPTIC_100G_PSM4_MSA'|'OPTIC_1000BASE_LX'|'OPTIC_1000BASE_SX' $OpticalStandard
 * @property 'NO_LIMIT'|'MAX_1400_LBS'|'MAX_1600_LBS'|'MAX_1800_LBS'|'MAX_2000_LBS' $MaximumSupportedWeightLbs
 */
class UpdateSiteRackPhysicalPropertiesRequest extends Request
{
    /**
     * @param array{
     *     SiteId: string,
     *     PowerDrawKva?: 'POWER_5_KVA'|'POWER_10_KVA'|'POWER_15_KVA'|'POWER_30_KVA',
     *     PowerPhase?: 'SINGLE_PHASE'|'THREE_PHASE',
     *     PowerConnector?: 'L6_30P'|'IEC309'|'AH530P7W'|'AH532P6W'|'CS8365C',
     *     PowerFeedDrop?: 'ABOVE_RACK'|'BELOW_RACK',
     *     UplinkGbps?: 'UPLINK_1G'|'UPLINK_10G'|'UPLINK_40G'|'UPLINK_100G',
     *     UplinkCount?: 'UPLINK_COUNT_1'|'UPLINK_COUNT_2'|'UPLINK_COUNT_3'|'UPLINK_COUNT_4'|'UPLINK_COUNT_5'|'UPLINK_COUNT_6'|'UPLINK_COUNT_7'|'UPLINK_COUNT_8'|'UPLINK_COUNT_12'|'UPLINK_COUNT_16',
     *     FiberOpticCableType?: 'SINGLE_MODE'|'MULTI_MODE',
     *     OpticalStandard?: 'OPTIC_10GBASE_SR'|'OPTIC_10GBASE_IR'|'OPTIC_10GBASE_LR'|'OPTIC_40GBASE_SR'|'OPTIC_40GBASE_ESR'|'OPTIC_40GBASE_IR4_LR4L'|'OPTIC_40GBASE_LR4'|'OPTIC_100GBASE_SR4'|'OPTIC_100GBASE_CWDM4'|'OPTIC_100GBASE_LR4'|'OPTIC_100G_PSM4_MSA'|'OPTIC_1000BASE_LX'|'OPTIC_1000BASE_SX',
     *     MaximumSupportedWeightLbs?: 'NO_LIMIT'|'MAX_1400_LBS'|'MAX_1600_LBS'|'MAX_1800_LBS'|'MAX_2000_LBS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
