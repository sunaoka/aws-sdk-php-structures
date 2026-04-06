<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $daemonTaskDefinitionArn
 * @property string|null $family
 * @property int|null $revision
 * @property string|null $taskRoleArn
 * @property string|null $executionRoleArn
 * @property list<DaemonContainerDefinition>|null $containerDefinitions
 * @property list<DaemonVolume>|null $volumes
 * @property string|null $cpu
 * @property string|null $memory
 * @property 'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $registeredAt
 * @property \Aws\Api\DateTimeResult|null $deleteRequestedAt
 * @property string|null $registeredBy
 */
class DaemonTaskDefinition extends Shape
{
    /**
     * @param array{
     *     daemonTaskDefinitionArn?: string|null,
     *     family?: string|null,
     *     revision?: int|null,
     *     taskRoleArn?: string|null,
     *     executionRoleArn?: string|null,
     *     containerDefinitions?: list<DaemonContainerDefinition>|null,
     *     volumes?: list<DaemonVolume>|null,
     *     cpu?: string|null,
     *     memory?: string|null,
     *     status?: 'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETED'|null,
     *     registeredAt?: \Aws\Api\DateTimeResult|null,
     *     deleteRequestedAt?: \Aws\Api\DateTimeResult|null,
     *     registeredBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
