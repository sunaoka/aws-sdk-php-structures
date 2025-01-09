<?php

namespace Sunaoka\Aws\Structures\SecurityIR\BatchGetMemberAccountDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'Associated'|'Disassociated' $relationshipStatus
 * @property 'Organization' $relationshipType
 */
class GetMembershipAccountDetailItem extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     relationshipStatus?: 'Associated'|'Disassociated',
     *     relationshipType?: 'Organization'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
