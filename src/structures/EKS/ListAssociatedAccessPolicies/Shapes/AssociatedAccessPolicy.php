<?php

namespace Sunaoka\Aws\Structures\EKS\ListAssociatedAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyArn
 * @property AccessScope|null $accessScope
 * @property \Aws\Api\DateTimeResult|null $associatedAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 */
class AssociatedAccessPolicy extends Shape
{
    /**
     * @param array{
     *     policyArn?: string|null,
     *     accessScope?: AccessScope|null,
     *     associatedAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
