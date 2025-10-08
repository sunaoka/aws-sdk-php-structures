<?php

namespace Sunaoka\Aws\Structures\BackupGateway;

class BackupGatewayClient extends \Aws\BackupGateway\BackupGatewayClient
{
    use AssociateGatewayToServer\AssociateGatewayToServerTrait;
    use CreateGateway\CreateGatewayTrait;
    use DeleteGateway\DeleteGatewayTrait;
    use DeleteHypervisor\DeleteHypervisorTrait;
    use DisassociateGatewayFromServer\DisassociateGatewayFromServerTrait;
    use GetBandwidthRateLimitSchedule\GetBandwidthRateLimitScheduleTrait;
    use GetGateway\GetGatewayTrait;
    use GetHypervisor\GetHypervisorTrait;
    use GetHypervisorPropertyMappings\GetHypervisorPropertyMappingsTrait;
    use GetVirtualMachine\GetVirtualMachineTrait;
    use ImportHypervisorConfiguration\ImportHypervisorConfigurationTrait;
    use ListGateways\ListGatewaysTrait;
    use ListHypervisors\ListHypervisorsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVirtualMachines\ListVirtualMachinesTrait;
    use PutBandwidthRateLimitSchedule\PutBandwidthRateLimitScheduleTrait;
    use PutHypervisorPropertyMappings\PutHypervisorPropertyMappingsTrait;
    use PutMaintenanceStartTime\PutMaintenanceStartTimeTrait;
    use StartVirtualMachinesMetadataSync\StartVirtualMachinesMetadataSyncTrait;
    use TagResource\TagResourceTrait;
    use TestHypervisorConfiguration\TestHypervisorConfigurationTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateGatewayInformation\UpdateGatewayInformationTrait;
    use UpdateGatewaySoftwareNow\UpdateGatewaySoftwareNowTrait;
    use UpdateHypervisor\UpdateHypervisorTrait;
}
