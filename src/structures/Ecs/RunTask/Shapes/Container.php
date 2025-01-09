<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerArn
 * @property string $taskArn
 * @property string $name
 * @property string $image
 * @property string $imageDigest
 * @property string $runtimeId
 * @property string $lastStatus
 * @property int $exitCode
 * @property string $reason
 * @property list<NetworkBinding> $networkBindings
 * @property list<NetworkInterface> $networkInterfaces
 * @property 'HEALTHY'|'UNHEALTHY'|'UNKNOWN' $healthStatus
 * @property list<ManagedAgent> $managedAgents
 * @property string $cpu
 * @property string $memory
 * @property string $memoryReservation
 * @property list<string> $gpuIds
 */
class Container extends Shape
{
    /**
     * @param array{
     *     containerArn?: string,
     *     taskArn?: string,
     *     name?: string,
     *     image?: string,
     *     imageDigest?: string,
     *     runtimeId?: string,
     *     lastStatus?: string,
     *     exitCode?: int,
     *     reason?: string,
     *     networkBindings?: list<NetworkBinding>,
     *     networkInterfaces?: list<NetworkInterface>,
     *     healthStatus?: 'HEALTHY'|'UNHEALTHY'|'UNKNOWN',
     *     managedAgents?: list<ManagedAgent>,
     *     cpu?: string,
     *     memory?: string,
     *     memoryReservation?: string,
     *     gpuIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
