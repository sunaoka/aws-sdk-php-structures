<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGluePartitionCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableArn
 * @property Shapes\PartitionValueList $Partition
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'> $Permissions
 * @property int<900, 43200> $DurationSeconds
 * @property Shapes\AuditContext $AuditContext
 * @property list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'> $SupportedPermissionTypes
 */
class GetTemporaryGluePartitionCredentialsRequest extends Request
{
    /**
     * @param array{
     *     TableArn: string,
     *     Partition: Shapes\PartitionValueList,
     *     Permissions?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>,
     *     DurationSeconds?: int<900, 43200>,
     *     AuditContext?: Shapes\AuditContext,
     *     SupportedPermissionTypes?: list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
