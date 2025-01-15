<?php

namespace Sunaoka\Aws\Structures\CodeConnections\UpdateSyncConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Branch
 * @property string|null $ConfigFile
 * @property string|null $RepositoryLinkId
 * @property string $ResourceName
 * @property string|null $RoleArn
 * @property 'CFN_STACK_SYNC' $SyncType
 * @property 'ENABLED'|'DISABLED'|null $PublishDeploymentStatus
 * @property 'ANY_CHANGE'|'FILE_CHANGE'|null $TriggerResourceUpdateOn
 * @property 'ENABLED'|'DISABLED'|null $PullRequestComment
 */
class UpdateSyncConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Branch?: string|null,
     *     ConfigFile?: string|null,
     *     RepositoryLinkId?: string|null,
     *     ResourceName: string,
     *     RoleArn?: string|null,
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
