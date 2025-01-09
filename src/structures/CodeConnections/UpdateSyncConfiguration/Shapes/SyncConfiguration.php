<?php

namespace Sunaoka\Aws\Structures\CodeConnections\UpdateSyncConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Branch
 * @property string $ConfigFile
 * @property string $OwnerId
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged' $ProviderType
 * @property string $RepositoryLinkId
 * @property string $RepositoryName
 * @property string $ResourceName
 * @property string $RoleArn
 * @property 'CFN_STACK_SYNC' $SyncType
 * @property 'ENABLED'|'DISABLED' $PublishDeploymentStatus
 * @property 'ANY_CHANGE'|'FILE_CHANGE' $TriggerResourceUpdateOn
 * @property 'ENABLED'|'DISABLED' $PullRequestComment
 */
class SyncConfiguration extends Shape
{
    /**
     * @param array{
     *     Branch: string,
     *     ConfigFile?: string,
     *     OwnerId: string,
     *     ProviderType: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged',
     *     RepositoryLinkId: string,
     *     RepositoryName: string,
     *     ResourceName: string,
     *     RoleArn: string,
     *     SyncType: 'CFN_STACK_SYNC',
     *     PublishDeploymentStatus?: 'ENABLED'|'DISABLED',
     *     TriggerResourceUpdateOn?: 'ANY_CHANGE'|'FILE_CHANGE',
     *     PullRequestComment?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
