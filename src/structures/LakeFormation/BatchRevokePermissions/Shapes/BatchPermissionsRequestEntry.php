<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchRevokePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property DataLakePrincipal|null $Principal
 * @property Resource|null $Resource
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>|null $Permissions
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>|null $PermissionsWithGrantOption
 */
class BatchPermissionsRequestEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Principal?: DataLakePrincipal|null,
     *     Resource?: Resource|null,
     *     Permissions?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>|null,
     *     PermissionsWithGrantOption?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
