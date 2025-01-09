<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOT_ASSOCIATED'|'ASSOCIATED_WITH_OWNER_ACCOUNT'|'ASSOCIATED_WITH_SHARED_ACCOUNT'|'PENDING_ASSOCIATION'|'PENDING_DISASSOCIATION' $AssociationStatus
 * @property string $AssociatedAccountId
 * @property string $ResourceId
 * @property string $ConnectionIdentifier
 */
class ConnectionAliasAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationStatus?: 'NOT_ASSOCIATED'|'ASSOCIATED_WITH_OWNER_ACCOUNT'|'ASSOCIATED_WITH_SHARED_ACCOUNT'|'PENDING_ASSOCIATION'|'PENDING_DISASSOCIATION',
     *     AssociatedAccountId?: string,
     *     ResourceId?: string,
     *     ConnectionIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
