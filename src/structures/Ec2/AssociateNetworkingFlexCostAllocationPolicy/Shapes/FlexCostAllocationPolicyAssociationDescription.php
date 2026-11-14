<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateNetworkingFlexCostAllocationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FcaPolicyAssociationId
 * @property string|null $FcaPolicyId
 * @property string|null $NetworkResourceId
 * @property string|null $OwnerAccount
 * @property \Aws\Api\DateTimeResult|null $AssociatedAt
 * @property \Aws\Api\DateTimeResult|null $ExpectedEffectiveAt
 * @property 'direct'|'scope'|null $AssociationMode
 * @property 'account'|'declarative-policy'|null $ManagedBy
 */
class FlexCostAllocationPolicyAssociationDescription extends Shape
{
    /**
     * @param array{
     *     FcaPolicyAssociationId?: string|null,
     *     FcaPolicyId?: string|null,
     *     NetworkResourceId?: string|null,
     *     OwnerAccount?: string|null,
     *     AssociatedAt?: \Aws\Api\DateTimeResult|null,
     *     ExpectedEffectiveAt?: \Aws\Api\DateTimeResult|null,
     *     AssociationMode?: 'direct'|'scope'|null,
     *     ManagedBy?: 'account'|'declarative-policy'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
