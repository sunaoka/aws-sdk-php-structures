<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakePrincipal $Principal
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'> $Permissions
 */
class PrincipalPermissions extends Shape
{
    /**
     * @param array{
     *     Principal?: DataLakePrincipal,
     *     Permissions?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
