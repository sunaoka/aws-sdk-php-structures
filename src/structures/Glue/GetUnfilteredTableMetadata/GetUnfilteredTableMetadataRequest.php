<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Region
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $Name
 * @property Shapes\AuditContext|null $AuditContext
 * @property list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'> $SupportedPermissionTypes
 * @property string|null $ParentResourceArn
 * @property string|null $RootResourceArn
 * @property Shapes\SupportedDialect|null $SupportedDialect
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'>|null $Permissions
 * @property Shapes\QuerySessionContext|null $QuerySessionContext
 */
class GetUnfilteredTableMetadataRequest extends Request
{
    /**
     * @param array{
     *     Region?: string|null,
     *     CatalogId: string,
     *     DatabaseName: string,
     *     Name: string,
     *     AuditContext?: Shapes\AuditContext|null,
     *     SupportedPermissionTypes: list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'>,
     *     ParentResourceArn?: string|null,
     *     RootResourceArn?: string|null,
     *     SupportedDialect?: Shapes\SupportedDialect|null,
     *     Permissions?: list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'>|null,
     *     QuerySessionContext?: Shapes\QuerySessionContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
