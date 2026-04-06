<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<string> $PartitionValues
 * @property Shapes\AuditContext|null $AuditContext
 * @property list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'> $SupportedPermissionTypes
 */
class GetUnfilteredPartitionMetadataRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionValues: list<string>,
     *     AuditContext?: Shapes\AuditContext|null,
     *     SupportedPermissionTypes: list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
