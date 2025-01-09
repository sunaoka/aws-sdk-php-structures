<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGlueTableCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableArn
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'> $Permissions
 * @property int $DurationSeconds
 * @property Shapes\AuditContext $AuditContext
 * @property list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'> $SupportedPermissionTypes
 * @property string $S3Path
 * @property Shapes\QuerySessionContext $QuerySessionContext
 */
class GetTemporaryGlueTableCredentialsRequest extends Request
{
    /**
     * @param array{
     *     TableArn: string,
     *     Permissions?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'DESCRIBE'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'|'CREATE_LF_TAG'|'ASSOCIATE'|'GRANT_WITH_LF_TAG_EXPRESSION'|'CREATE_LF_TAG_EXPRESSION'|'CREATE_CATALOG'|'SUPER_USER'>,
     *     DurationSeconds?: int,
     *     AuditContext?: Shapes\AuditContext,
     *     SupportedPermissionTypes?: list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'>,
     *     S3Path?: string,
     *     QuerySessionContext?: Shapes\QuerySessionContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
