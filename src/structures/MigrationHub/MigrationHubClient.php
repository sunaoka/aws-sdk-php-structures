<?php

namespace Sunaoka\Aws\Structures\MigrationHub;

class MigrationHubClient extends \Aws\MigrationHub\MigrationHubClient
{
    use AssociateCreatedArtifact\AssociateCreatedArtifactTrait;
    use AssociateDiscoveredResource\AssociateDiscoveredResourceTrait;
    use AssociateSourceResource\AssociateSourceResourceTrait;
    use CreateProgressUpdateStream\CreateProgressUpdateStreamTrait;
    use DeleteProgressUpdateStream\DeleteProgressUpdateStreamTrait;
    use DescribeApplicationState\DescribeApplicationStateTrait;
    use DescribeMigrationTask\DescribeMigrationTaskTrait;
    use DisassociateCreatedArtifact\DisassociateCreatedArtifactTrait;
    use DisassociateDiscoveredResource\DisassociateDiscoveredResourceTrait;
    use DisassociateSourceResource\DisassociateSourceResourceTrait;
    use ImportMigrationTask\ImportMigrationTaskTrait;
    use ListApplicationStates\ListApplicationStatesTrait;
    use ListCreatedArtifacts\ListCreatedArtifactsTrait;
    use ListDiscoveredResources\ListDiscoveredResourcesTrait;
    use ListMigrationTaskUpdates\ListMigrationTaskUpdatesTrait;
    use ListMigrationTasks\ListMigrationTasksTrait;
    use ListProgressUpdateStreams\ListProgressUpdateStreamsTrait;
    use ListSourceResources\ListSourceResourcesTrait;
    use NotifyApplicationState\NotifyApplicationStateTrait;
    use NotifyMigrationTaskState\NotifyMigrationTaskStateTrait;
    use PutResourceAttributes\PutResourceAttributesTrait;
}
