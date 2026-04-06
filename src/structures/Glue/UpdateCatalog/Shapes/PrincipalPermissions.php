<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakePrincipal|null $Principal
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'>|null $Permissions
 */
class PrincipalPermissions extends Shape
{
    /**
     * @param array{
     *     Principal?: DataLakePrincipal|null,
     *     Permissions?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
