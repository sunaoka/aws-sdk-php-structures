<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Region
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $Name
 * @property Shapes\AuditContext $AuditContext
 * @property list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'> $SupportedPermissionTypes
 * @property string $ParentResourceArn
 * @property string $RootResourceArn
 * @property Shapes\SupportedDialect $SupportedDialect
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'> $Permissions
 * @property Shapes\QuerySessionContext $QuerySessionContext
 */
class GetUnfilteredTableMetadataRequest extends Request
{
    /**
     * @param array{
     *     Region?: string,
     *     CatalogId: string,
     *     DatabaseName: string,
     *     Name: string,
     *     AuditContext?: Shapes\AuditContext,
     *     SupportedPermissionTypes: list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'>,
     *     ParentResourceArn?: string,
     *     RootResourceArn?: string,
     *     SupportedDialect?: Shapes\SupportedDialect,
     *     Permissions?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'>,
     *     QuerySessionContext?: Shapes\QuerySessionContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
