<?php

namespace Sunaoka\Aws\Structures\SecurityIR\BatchGetMemberAccountDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'Associated'|'Disassociated'|null $relationshipStatus
 * @property 'Organization'|null $relationshipType
 */
class GetMembershipAccountDetailItem extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     relationshipStatus?: 'Associated'|'Disassociated'|null,
     *     relationshipType?: 'Organization'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
