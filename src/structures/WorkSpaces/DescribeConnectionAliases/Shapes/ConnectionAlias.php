<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionString
 * @property string|null $AliasId
 * @property 'CREATING'|'CREATED'|'DELETING'|null $State
 * @property string|null $OwnerAccountId
 * @property list<ConnectionAliasAssociation>|null $Associations
 */
class ConnectionAlias extends Shape
{
    /**
     * @param array{
     *     ConnectionString?: string|null,
     *     AliasId?: string|null,
     *     State?: 'CREATING'|'CREATED'|'DELETING'|null,
     *     OwnerAccountId?: string|null,
     *     Associations?: list<ConnectionAliasAssociation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
