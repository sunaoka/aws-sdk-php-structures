<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Type
 * @property string $Uid
 * @property string $Namespace
 * @property bool $HostNetwork
 * @property list<Container> $Containers
 * @property list<Volume> $Volumes
 * @property string $ServiceAccountName
 * @property bool $HostIPC
 * @property bool $HostPID
 */
class KubernetesWorkloadDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: string,
     *     Uid?: string,
     *     Namespace?: string,
     *     HostNetwork?: bool,
     *     Containers?: list<Container>,
     *     Volumes?: list<Volume>,
     *     ServiceAccountName?: string,
     *     HostIPC?: bool,
     *     HostPID?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
