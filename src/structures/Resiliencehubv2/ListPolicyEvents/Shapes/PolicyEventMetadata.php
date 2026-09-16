<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListPolicyEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PolicyAttachedToServiceMetadata|null $policyAttachedToService
 * @property PolicyDetachedFromServiceMetadata|null $policyDetachedFromService
 * @property PolicySharingRevokedMetadata|null $policySharingRevoked
 * @property PolicyDeletedMetadata|null $policyDeleted
 */
class PolicyEventMetadata extends Shape
{
    /**
     * @param array{
     *     policyAttachedToService?: PolicyAttachedToServiceMetadata|null,
     *     policyDetachedFromService?: PolicyDetachedFromServiceMetadata|null,
     *     policySharingRevoked?: PolicySharingRevokedMetadata|null,
     *     policyDeleted?: PolicyDeletedMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
