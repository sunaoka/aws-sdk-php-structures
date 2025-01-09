<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GrantPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property Shapes\DataLakePrincipal $Principal
 * @property Shapes\Resource $Resource
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'> $Permissions
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'> $PermissionsWithGrantOption
 */
class GrantPermissionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Principal: Shapes\DataLakePrincipal,
     *     Resource: Shapes\Resource,
     *     Permissions: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>,
     *     PermissionsWithGrantOption?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
