<?php

namespace Sunaoka\Aws\Structures\Odb;

class OdbClient extends \Aws\Odb\OdbClient
{
    use AcceptMarketplaceRegistration\AcceptMarketplaceRegistrationTrait;
    use AssociateIamRoleToResource\AssociateIamRoleToResourceTrait;
    use CreateCloudAutonomousVmCluster\CreateCloudAutonomousVmClusterTrait;
    use CreateCloudExadataInfrastructure\CreateCloudExadataInfrastructureTrait;
    use CreateCloudVmCluster\CreateCloudVmClusterTrait;
    use CreateOdbNetwork\CreateOdbNetworkTrait;
    use CreateOdbPeeringConnection\CreateOdbPeeringConnectionTrait;
    use DeleteCloudAutonomousVmCluster\DeleteCloudAutonomousVmClusterTrait;
    use DeleteCloudExadataInfrastructure\DeleteCloudExadataInfrastructureTrait;
    use DeleteCloudVmCluster\DeleteCloudVmClusterTrait;
    use DeleteOdbNetwork\DeleteOdbNetworkTrait;
    use DeleteOdbPeeringConnection\DeleteOdbPeeringConnectionTrait;
    use DisassociateIamRoleFromResource\DisassociateIamRoleFromResourceTrait;
    use GetCloudAutonomousVmCluster\GetCloudAutonomousVmClusterTrait;
    use GetCloudExadataInfrastructure\GetCloudExadataInfrastructureTrait;
    use GetCloudExadataInfrastructureUnallocatedResources\GetCloudExadataInfrastructureUnallocatedResourcesTrait;
    use GetCloudVmCluster\GetCloudVmClusterTrait;
    use GetDbNode\GetDbNodeTrait;
    use GetDbServer\GetDbServerTrait;
    use GetOciOnboardingStatus\GetOciOnboardingStatusTrait;
    use GetOdbNetwork\GetOdbNetworkTrait;
    use GetOdbPeeringConnection\GetOdbPeeringConnectionTrait;
    use InitializeService\InitializeServiceTrait;
    use ListAutonomousVirtualMachines\ListAutonomousVirtualMachinesTrait;
    use ListCloudAutonomousVmClusters\ListCloudAutonomousVmClustersTrait;
    use ListCloudExadataInfrastructures\ListCloudExadataInfrastructuresTrait;
    use ListCloudVmClusters\ListCloudVmClustersTrait;
    use ListDbNodes\ListDbNodesTrait;
    use ListDbServers\ListDbServersTrait;
    use ListDbSystemShapes\ListDbSystemShapesTrait;
    use ListGiVersions\ListGiVersionsTrait;
    use ListOdbNetworks\ListOdbNetworksTrait;
    use ListOdbPeeringConnections\ListOdbPeeringConnectionsTrait;
    use ListSystemVersions\ListSystemVersionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RebootDbNode\RebootDbNodeTrait;
    use StartDbNode\StartDbNodeTrait;
    use StopDbNode\StopDbNodeTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCloudExadataInfrastructure\UpdateCloudExadataInfrastructureTrait;
    use UpdateOdbNetwork\UpdateOdbNetworkTrait;
    use UpdateOdbPeeringConnection\UpdateOdbPeeringConnectionTrait;
}
