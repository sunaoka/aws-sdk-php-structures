<?php

namespace Sunaoka\Aws\Structures\CodeConnections;

class CodeConnectionsClient extends \Aws\CodeConnections\CodeConnectionsClient
{
    use CreateConnection\CreateConnectionTrait;
    use CreateHost\CreateHostTrait;
    use CreateRepositoryLink\CreateRepositoryLinkTrait;
    use CreateSyncConfiguration\CreateSyncConfigurationTrait;
    use DeleteConnection\DeleteConnectionTrait;
    use DeleteHost\DeleteHostTrait;
    use DeleteRepositoryLink\DeleteRepositoryLinkTrait;
    use DeleteSyncConfiguration\DeleteSyncConfigurationTrait;
    use GetConnection\GetConnectionTrait;
    use GetHost\GetHostTrait;
    use GetRepositoryLink\GetRepositoryLinkTrait;
    use GetRepositorySyncStatus\GetRepositorySyncStatusTrait;
    use GetResourceSyncStatus\GetResourceSyncStatusTrait;
    use GetSyncBlockerSummary\GetSyncBlockerSummaryTrait;
    use GetSyncConfiguration\GetSyncConfigurationTrait;
    use ListConnections\ListConnectionsTrait;
    use ListHosts\ListHostsTrait;
    use ListRepositoryLinks\ListRepositoryLinksTrait;
    use ListRepositorySyncDefinitions\ListRepositorySyncDefinitionsTrait;
    use ListSyncConfigurations\ListSyncConfigurationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateHost\UpdateHostTrait;
    use UpdateRepositoryLink\UpdateRepositoryLinkTrait;
    use UpdateSyncBlocker\UpdateSyncBlockerTrait;
    use UpdateSyncConfiguration\UpdateSyncConfigurationTrait;
}
