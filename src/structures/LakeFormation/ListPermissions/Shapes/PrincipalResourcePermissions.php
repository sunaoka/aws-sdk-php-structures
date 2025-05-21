<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakePrincipal|null $Principal
 * @property ResourceShape|null $Resource
 * @property Condition|null $Condition
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>|null $Permissions
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>|null $PermissionsWithGrantOption
 * @property DetailsMap|null $AdditionalDetails
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $LastUpdatedBy
 */
class PrincipalResourcePermissions extends Shape
{
    /**
     * @param array{
     *     Principal?: DataLakePrincipal|null,
     *     Resource?: ResourceShape|null,
     *     Condition?: Condition|null,
     *     Permissions?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>|null,
     *     PermissionsWithGrantOption?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>|null,
     *     AdditionalDetails?: DetailsMap|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
