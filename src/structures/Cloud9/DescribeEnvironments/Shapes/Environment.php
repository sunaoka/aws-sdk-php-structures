<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property 'ssh'|'ec2' $type
 * @property 'CONNECT_SSH'|'CONNECT_SSM' $connectionType
 * @property string $arn
 * @property string $ownerArn
 * @property EnvironmentLifecycle $lifecycle
 * @property 'ENABLED_ON_CREATE'|'ENABLED_BY_OWNER'|'DISABLED_BY_DEFAULT'|'DISABLED_BY_OWNER'|'DISABLED_BY_COLLABORATOR'|'PENDING_REMOVAL_BY_COLLABORATOR'|'PENDING_START_REMOVAL_BY_COLLABORATOR'|'PENDING_REMOVAL_BY_OWNER'|'PENDING_START_REMOVAL_BY_OWNER'|'FAILED_REMOVAL_BY_COLLABORATOR'|'FAILED_REMOVAL_BY_OWNER' $managedCredentialsStatus
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     description?: string,
     *     type: 'ssh'|'ec2',
     *     connectionType?: 'CONNECT_SSH'|'CONNECT_SSM',
     *     arn: string,
     *     ownerArn: string,
     *     lifecycle?: EnvironmentLifecycle,
     *     managedCredentialsStatus?: 'ENABLED_ON_CREATE'|'ENABLED_BY_OWNER'|'DISABLED_BY_DEFAULT'|'DISABLED_BY_OWNER'|'DISABLED_BY_COLLABORATOR'|'PENDING_REMOVAL_BY_COLLABORATOR'|'PENDING_START_REMOVAL_BY_COLLABORATOR'|'PENDING_REMOVAL_BY_OWNER'|'PENDING_START_REMOVAL_BY_OWNER'|'FAILED_REMOVAL_BY_COLLABORATOR'|'FAILED_REMOVAL_BY_OWNER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
