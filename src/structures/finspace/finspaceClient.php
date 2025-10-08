<?php

namespace Sunaoka\Aws\Structures\finspace;

class finspaceClient extends \Aws\finspace\finspaceClient
{
    use CreateEnvironment\CreateEnvironmentTrait;
    use CreateKxChangeset\CreateKxChangesetTrait;
    use CreateKxCluster\CreateKxClusterTrait;
    use CreateKxDatabase\CreateKxDatabaseTrait;
    use CreateKxDataview\CreateKxDataviewTrait;
    use CreateKxEnvironment\CreateKxEnvironmentTrait;
    use CreateKxScalingGroup\CreateKxScalingGroupTrait;
    use CreateKxUser\CreateKxUserTrait;
    use CreateKxVolume\CreateKxVolumeTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use DeleteKxCluster\DeleteKxClusterTrait;
    use DeleteKxClusterNode\DeleteKxClusterNodeTrait;
    use DeleteKxDatabase\DeleteKxDatabaseTrait;
    use DeleteKxDataview\DeleteKxDataviewTrait;
    use DeleteKxEnvironment\DeleteKxEnvironmentTrait;
    use DeleteKxScalingGroup\DeleteKxScalingGroupTrait;
    use DeleteKxUser\DeleteKxUserTrait;
    use DeleteKxVolume\DeleteKxVolumeTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use GetKxChangeset\GetKxChangesetTrait;
    use GetKxCluster\GetKxClusterTrait;
    use GetKxConnectionString\GetKxConnectionStringTrait;
    use GetKxDatabase\GetKxDatabaseTrait;
    use GetKxDataview\GetKxDataviewTrait;
    use GetKxEnvironment\GetKxEnvironmentTrait;
    use GetKxScalingGroup\GetKxScalingGroupTrait;
    use GetKxUser\GetKxUserTrait;
    use GetKxVolume\GetKxVolumeTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListKxChangesets\ListKxChangesetsTrait;
    use ListKxClusterNodes\ListKxClusterNodesTrait;
    use ListKxClusters\ListKxClustersTrait;
    use ListKxDatabases\ListKxDatabasesTrait;
    use ListKxDataviews\ListKxDataviewsTrait;
    use ListKxEnvironments\ListKxEnvironmentsTrait;
    use ListKxScalingGroups\ListKxScalingGroupsTrait;
    use ListKxUsers\ListKxUsersTrait;
    use ListKxVolumes\ListKxVolumesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateEnvironment\UpdateEnvironmentTrait;
    use UpdateKxClusterCodeConfiguration\UpdateKxClusterCodeConfigurationTrait;
    use UpdateKxClusterDatabases\UpdateKxClusterDatabasesTrait;
    use UpdateKxDatabase\UpdateKxDatabaseTrait;
    use UpdateKxDataview\UpdateKxDataviewTrait;
    use UpdateKxEnvironment\UpdateKxEnvironmentTrait;
    use UpdateKxEnvironmentNetwork\UpdateKxEnvironmentNetworkTrait;
    use UpdateKxUser\UpdateKxUserTrait;
    use UpdateKxVolume\UpdateKxVolumeTrait;
}
