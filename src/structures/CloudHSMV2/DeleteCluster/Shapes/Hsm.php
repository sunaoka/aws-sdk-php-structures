<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $ClusterId
 * @property string $SubnetId
 * @property string $EniId
 * @property string $EniIp
 * @property string $EniIpV6
 * @property string $HsmId
 * @property string $HsmType
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DEGRADED'|'DELETE_IN_PROGRESS'|'DELETED' $State
 * @property string $StateMessage
 */
class Hsm extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     ClusterId?: string,
     *     SubnetId?: string,
     *     EniId?: string,
     *     EniIp?: string,
     *     EniIpV6?: string,
     *     HsmId: string,
     *     HsmType?: string,
     *     State?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'DEGRADED'|'DELETE_IN_PROGRESS'|'DELETED',
     *     StateMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
