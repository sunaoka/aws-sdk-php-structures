<?php

namespace Sunaoka\Aws\Structures\CodeConnections\CreateSyncConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Branch
 * @property string $ConfigFile
 * @property string $RepositoryLinkId
 * @property string $ResourceName
 * @property string $RoleArn
 * @property 'CFN_STACK_SYNC' $SyncType
 * @property 'ENABLED'|'DISABLED'|null $PublishDeploymentStatus
 * @property 'ANY_CHANGE'|'FILE_CHANGE'|null $TriggerResourceUpdateOn
 * @property 'ENABLED'|'DISABLED'|null $PullRequestComment
 */
class CreateSyncConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Branch: string,
     *     ConfigFile: string,
     *     RepositoryLinkId: string,
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
