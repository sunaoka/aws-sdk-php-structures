<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyStoreId
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdDate
 */
class PolicyStoreItem extends Shape
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     arn: string,
     *     createdDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
