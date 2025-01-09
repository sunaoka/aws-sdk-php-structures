<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\UpdateSyncConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Branch
 * @property string $ConfigFile
 * @property string $RepositoryLinkId
 * @property string $ResourceName
 * @property string $RoleArn
 * @property 'CFN_STACK_SYNC' $SyncType
 * @property 'ENABLED'|'DISABLED' $PublishDeploymentStatus
 * @property 'ANY_CHANGE'|'FILE_CHANGE' $TriggerResourceUpdateOn
 */
class UpdateSyncConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Branch?: string,
     *     ConfigFile?: string,
     *     RepositoryLinkId?: string,
     *     ResourceName: string,
     *     RoleArn?: string,
     *     SyncType: 'CFN_STACK_SYNC',
     *     PublishDeploymentStatus?: 'ENABLED'|'DISABLED',
     *     TriggerResourceUpdateOn?: 'ANY_CHANGE'|'FILE_CHANGE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
