<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOT_ASSOCIATED'|'ASSOCIATED_WITH_OWNER_ACCOUNT'|'ASSOCIATED_WITH_SHARED_ACCOUNT'|'PENDING_ASSOCIATION'|'PENDING_DISASSOCIATION'|null $AssociationStatus
 * @property string|null $AssociatedAccountId
 * @property string|null $ResourceId
 * @property string|null $ConnectionIdentifier
 */
class ConnectionAliasAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationStatus?: 'NOT_ASSOCIATED'|'ASSOCIATED_WITH_OWNER_ACCOUNT'|'ASSOCIATED_WITH_SHARED_ACCOUNT'|'PENDING_ASSOCIATION'|'PENDING_DISASSOCIATION'|null,
     *     AssociatedAccountId?: string|null,
     *     ResourceId?: string|null,
     *     ConnectionIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
