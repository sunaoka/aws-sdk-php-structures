<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayFirmwareInformation;

trait GetWirelessGatewayFirmwareInformationTrait
{
    /**
     * @param GetWirelessGatewayFirmwareInformationRequest $args
     * @return GetWirelessGatewayFirmwareInformationResponse
     */
    public function getWirelessGatewayFirmwareInformation(GetWirelessGatewayFirmwareInformationRequest $args)
    {
        $result = parent::getWirelessGatewayFirmwareInformation($args->toArray());
        return new GetWirelessGatewayFirmwareInformationResponse($result->toArray());
    }
}
