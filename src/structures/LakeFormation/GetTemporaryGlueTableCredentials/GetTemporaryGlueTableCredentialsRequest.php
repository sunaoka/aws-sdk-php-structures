<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGlueTableCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableArn
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'>|null $Permissions
 * @property int<900, 43200>|null $DurationSeconds
 * @property Shapes\AuditContext|null $AuditContext
 * @property list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'>|null $SupportedPermissionTypes
 */
class GetTemporaryGlueTableCredentialsRequest extends Request
{
    /**
     * @param array{
     *     TableArn: string,
     *     Permissions?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'>|null,
     *     DurationSeconds?: int<900, 43200>|null,
     *     AuditContext?: Shapes\AuditContext|null,
     *     SupportedPermissionTypes?: list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
