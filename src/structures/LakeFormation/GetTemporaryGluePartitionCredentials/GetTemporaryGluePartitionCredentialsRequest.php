<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGluePartitionCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableArn
 * @property Shapes\PartitionValueList $Partition
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>|null $Permissions
 * @property int<900, 43200>|null $DurationSeconds
 * @property Shapes\AuditContext|null $AuditContext
 * @property list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'>|null $SupportedPermissionTypes
 */
class GetTemporaryGluePartitionCredentialsRequest extends Request
{
    /**
     * @param array{
     *     TableArn: string,
     *     Partition: Shapes\PartitionValueList,
     *     Permissions?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>|null,
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
