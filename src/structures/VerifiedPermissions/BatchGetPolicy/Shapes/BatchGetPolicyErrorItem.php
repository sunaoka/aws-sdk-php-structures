<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchGetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POLICY_STORE_NOT_FOUND'|'POLICY_NOT_FOUND' $code
 * @property string $policyStoreId
 * @property string $policyId
 * @property string $message
 */
class BatchGetPolicyErrorItem extends Shape
{
    /**
     * @param array{
     *     code: 'POLICY_STORE_NOT_FOUND'|'POLICY_NOT_FOUND',
     *     policyStoreId: string,
     *     policyId: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
