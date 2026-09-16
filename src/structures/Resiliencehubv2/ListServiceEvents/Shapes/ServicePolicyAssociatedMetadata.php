<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyName
 * @property string|null $policyArn
 * @property string|null $policyOwnerAccountId
 * @property 'SELF'|'CROSS_ACCOUNT'|null $policySource
 */
class ServicePolicyAssociatedMetadata extends Shape
{
    /**
     * @param array{
     *     policyName?: string|null,
     *     policyArn?: string|null,
     *     policyOwnerAccountId?: string|null,
     *     policySource?: 'SELF'|'CROSS_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
