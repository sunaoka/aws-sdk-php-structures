<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyStoreAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aliasName
 * @property string $policyStoreId
 * @property string $aliasArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'Active'|'PendingDeletion' $state
 */
class PolicyStoreAliasItem extends Shape
{
    /**
     * @param array{
     *     aliasName: string,
     *     policyStoreId: string,
     *     aliasArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     state: 'Active'|'PendingDeletion'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
