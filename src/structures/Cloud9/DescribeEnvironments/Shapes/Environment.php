<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property 'ssh'|'ec2' $type
 * @property 'CONNECT_SSH'|'CONNECT_SSM'|null $connectionType
 * @property string $arn
 * @property string $ownerArn
 * @property EnvironmentLifecycle|null $lifecycle
 * @property 'ENABLED_ON_CREATE'|'ENABLED_BY_OWNER'|'DISABLED_BY_DEFAULT'|'DISABLED_BY_OWNER'|'DISABLED_BY_COLLABORATOR'|'PENDING_REMOVAL_BY_COLLABORATOR'|'PENDING_START_REMOVAL_BY_COLLABORATOR'|'PENDING_REMOVAL_BY_OWNER'|'PENDING_START_REMOVAL_BY_OWNER'|'FAILED_REMOVAL_BY_COLLABORATOR'|'FAILED_REMOVAL_BY_OWNER'|null $managedCredentialsStatus
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     type: 'ssh'|'ec2',
     *     connectionType?: 'CONNECT_SSH'|'CONNECT_SSM'|null,
     *     arn: string,
     *     ownerArn: string,
     *     lifecycle?: EnvironmentLifecycle|null,
     *     managedCredentialsStatus?: 'ENABLED_ON_CREATE'|'ENABLED_BY_OWNER'|'DISABLED_BY_DEFAULT'|'DISABLED_BY_OWNER'|'DISABLED_BY_COLLABORATOR'|'PENDING_REMOVAL_BY_COLLABORATOR'|'PENDING_START_REMOVAL_BY_COLLABORATOR'|'PENDING_REMOVAL_BY_OWNER'|'PENDING_START_REMOVAL_BY_OWNER'|'FAILED_REMOVAL_BY_COLLABORATOR'|'FAILED_REMOVAL_BY_OWNER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
