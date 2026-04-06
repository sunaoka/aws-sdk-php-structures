<?php

namespace Sunaoka\Aws\Structures\SecurityIR\BatchGetMemberAccountDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'Associated'|'Disassociated'|'Unassociated'|null $relationshipStatus
 * @property 'Organization'|'Unrelated'|null $relationshipType
 */
class GetMembershipAccountDetailItem extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     relationshipStatus?: 'Associated'|'Disassociated'|'Unassociated'|null,
     *     relationshipType?: 'Organization'|'Unrelated'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
