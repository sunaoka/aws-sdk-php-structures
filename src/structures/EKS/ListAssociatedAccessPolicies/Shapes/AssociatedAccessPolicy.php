<?php

namespace Sunaoka\Aws\Structures\EKS\ListAssociatedAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyArn
 * @property AccessScope $accessScope
 * @property \Aws\Api\DateTimeResult $associatedAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class AssociatedAccessPolicy extends Shape
{
    /**
     * @param array{
     *     policyArn?: string,
     *     accessScope?: AccessScope,
     *     associatedAt?: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
