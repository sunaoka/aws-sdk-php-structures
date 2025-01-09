<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionString
 * @property string $AliasId
 * @property 'CREATING'|'CREATED'|'DELETING' $State
 * @property string $OwnerAccountId
 * @property list<ConnectionAliasAssociation> $Associations
 */
class ConnectionAlias extends Shape
{
    /**
     * @param array{
     *     ConnectionString?: string,
     *     AliasId?: string,
     *     State?: 'CREATING'|'CREATED'|'DELETING',
     *     OwnerAccountId?: string,
     *     Associations?: list<ConnectionAliasAssociation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
