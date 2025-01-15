<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HostName
 * @property string|null $HostIp
 * @property string|null $EC2InstanceId
 * @property string|null $InstanceId
 * @property 'LEADER'|'WORKER'|'STANDBY'|'UNKNOWN'|null $HostRole
 * @property string|null $OsVersion
 */
class Host extends Shape
{
    /**
     * @param array{
     *     HostName?: string|null,
     *     HostIp?: string|null,
     *     EC2InstanceId?: string|null,
     *     InstanceId?: string|null,
     *     HostRole?: 'LEADER'|'WORKER'|'STANDBY'|'UNKNOWN'|null,
     *     OsVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
