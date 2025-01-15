<?php

namespace Sunaoka\Aws\Structures\Ecs\StartTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerArn
 * @property string|null $taskArn
 * @property string|null $name
 * @property string|null $image
 * @property string|null $imageDigest
 * @property string|null $runtimeId
 * @property string|null $lastStatus
 * @property int|null $exitCode
 * @property string|null $reason
 * @property list<NetworkBinding>|null $networkBindings
 * @property list<NetworkInterface>|null $networkInterfaces
 * @property 'HEALTHY'|'UNHEALTHY'|'UNKNOWN'|null $healthStatus
 * @property list<ManagedAgent>|null $managedAgents
 * @property string|null $cpu
 * @property string|null $memory
 * @property string|null $memoryReservation
 * @property list<string>|null $gpuIds
 */
class Container extends Shape
{
    /**
     * @param array{
     *     containerArn?: string|null,
     *     taskArn?: string|null,
     *     name?: string|null,
     *     image?: string|null,
     *     imageDigest?: string|null,
     *     runtimeId?: string|null,
     *     lastStatus?: string|null,
     *     exitCode?: int|null,
     *     reason?: string|null,
     *     networkBindings?: list<NetworkBinding>|null,
     *     networkInterfaces?: list<NetworkInterface>|null,
     *     healthStatus?: 'HEALTHY'|'UNHEALTHY'|'UNKNOWN'|null,
     *     managedAgents?: list<ManagedAgent>|null,
     *     cpu?: string|null,
     *     memory?: string|null,
     *     memoryReservation?: string|null,
     *     gpuIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
