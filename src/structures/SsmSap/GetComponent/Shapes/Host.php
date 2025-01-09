<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostName
 * @property string $HostIp
 * @property string $EC2InstanceId
 * @property string $InstanceId
 * @property 'LEADER'|'WORKER'|'STANDBY'|'UNKNOWN' $HostRole
 * @property string $OsVersion
 */
class Host extends Shape
{
    /**
     * @param array{
     *     HostName?: string,
     *     HostIp?: string,
     *     EC2InstanceId?: string,
     *     InstanceId?: string,
     *     HostRole?: 'LEADER'|'WORKER'|'STANDBY'|'UNKNOWN',
     *     OsVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
