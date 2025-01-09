<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchGetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyStoreId
 * @property string $policyId
 */
class BatchGetPolicyInputItem extends Shape
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     policyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
