<?php

namespace Sunaoka\Aws\Structures\MailManager\ListIngressPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IngressPointName
 * @property string $IngressPointId
 * @property 'PROVISIONING'|'DEPROVISIONING'|'UPDATING'|'ACTIVE'|'CLOSED'|'FAILED'|'ASSOCIATED_VPC_ENDPOINT_DOES_NOT_EXIST' $Status
 * @property 'OPEN'|'AUTH'|'MTLS' $Type
 * @property string|null $ARecord
 */
class IngressPoint extends Shape
{
    /**
     * @param array{
     *     IngressPointName: string,
     *     IngressPointId: string,
     *     Status: 'PROVISIONING'|'DEPROVISIONING'|'UPDATING'|'ACTIVE'|'CLOSED'|'FAILED'|'ASSOCIATED_VPC_ENDPOINT_DOES_NOT_EXIST',
     *     Type: 'OPEN'|'AUTH'|'MTLS',
     *     ARecord?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
