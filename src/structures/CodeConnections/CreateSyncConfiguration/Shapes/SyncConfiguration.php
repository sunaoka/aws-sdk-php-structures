<?php

namespace Sunaoka\Aws\Structures\CodeConnections\CreateSyncConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Branch
 * @property string|null $ConfigFile
 * @property string $OwnerId
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|'AzureDevOps' $ProviderType
 * @property string $RepositoryLinkId
 * @property string $RepositoryName
 * @property string $ResourceName
 * @property string $RoleArn
 * @property 'CFN_STACK_SYNC' $SyncType
 * @property 'ENABLED'|'DISABLED'|null $PublishDeploymentStatus
 * @property 'ANY_CHANGE'|'FILE_CHANGE'|null $TriggerResourceUpdateOn
 * @property 'ENABLED'|'DISABLED'|null $PullRequestComment
 */
class SyncConfiguration extends Shape
{
    /**
     * @param array{
     *     Branch: string,
     *     ConfigFile?: string|null,
     *     OwnerId: string,
     *     ProviderType: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged'|'AzureDevOps',
     *     RepositoryLinkId: string,
     *     RepositoryName: string,
     *     ResourceName: string,
     *     RoleArn: string,
     *     SyncType: 'CFN_STACK_SYNC',
     *     PublishDeploymentStatus?: 'ENABLED'|'DISABLED'|null,
     *     TriggerResourceUpdateOn?: 'ANY_CHANGE'|'FILE_CHANGE'|null,
     *     PullRequestComment?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
