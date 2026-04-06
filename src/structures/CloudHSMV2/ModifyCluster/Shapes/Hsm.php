<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\ModifyCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $ClusterId
 * @property string|null $SubnetId
 * @property string|null $EniId
 * @property string|null $EniIp
 * @property string|null $EniIpV6
 * @property string $HsmId
 * @property string|null $HsmType
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DEGRADED'|'DELETE_IN_PROGRESS'|'DELETED'|null $State
 * @property string|null $StateMessage
 */
class Hsm extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     ClusterId?: string|null,
     *     SubnetId?: string|null,
     *     EniId?: string|null,
     *     EniIp?: string|null,
     *     EniIpV6?: string|null,
     *     HsmId: string,
     *     HsmType?: string|null,
     *     State?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'DEGRADED'|'DELETE_IN_PROGRESS'|'DELETED'|null,
     *     StateMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
