<?php

namespace Sunaoka\Aws\Structures\finspace;

class finspaceClient extends \Aws\finspace\finspaceClient
{
    use CreateEnvironment\CreateEnvironmentTrait;
    use CreateKxChangeset\CreateKxChangesetTrait;
    use CreateKxCluster\CreateKxClusterTrait;
    use CreateKxDatabase\CreateKxDatabaseTrait;
    use CreateKxEnvironment\CreateKxEnvironmentTrait;
    use CreateKxUser\CreateKxUserTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use DeleteKxCluster\DeleteKxClusterTrait;
    use DeleteKxDatabase\DeleteKxDatabaseTrait;
    use DeleteKxEnvironment\DeleteKxEnvironmentTrait;
    use DeleteKxUser\DeleteKxUserTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use GetKxChangeset\GetKxChangesetTrait;
    use GetKxCluster\GetKxClusterTrait;
    use GetKxConnectionString\GetKxConnectionStringTrait;
    use GetKxDatabase\GetKxDatabaseTrait;
    use GetKxEnvironment\GetKxEnvironmentTrait;
    use GetKxUser\GetKxUserTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListKxChangesets\ListKxChangesetsTrait;
    use ListKxClusterNodes\ListKxClusterNodesTrait;
    use ListKxClusters\ListKxClustersTrait;
    use ListKxDatabases\ListKxDatabasesTrait;
    use ListKxEnvironments\ListKxEnvironmentsTrait;
    use ListKxUsers\ListKxUsersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateEnvironment\UpdateEnvironmentTrait;
    use UpdateKxClusterDatabases\UpdateKxClusterDatabasesTrait;
    use UpdateKxDatabase\UpdateKxDatabaseTrait;
    use UpdateKxEnvironment\UpdateKxEnvironmentTrait;
    use UpdateKxEnvironmentNetwork\UpdateKxEnvironmentNetworkTrait;
    use UpdateKxUser\UpdateKxUserTrait;
}
