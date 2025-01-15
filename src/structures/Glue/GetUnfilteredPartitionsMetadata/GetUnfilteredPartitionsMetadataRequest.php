<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Region
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string|null $Expression
 * @property Shapes\AuditContext|null $AuditContext
 * @property list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'> $SupportedPermissionTypes
 * @property string|null $NextToken
 * @property Shapes\Segment|null $Segment
 * @property int<1, 1000>|null $MaxResults
 * @property Shapes\QuerySessionContext|null $QuerySessionContext
 */
class GetUnfilteredPartitionsMetadataRequest extends Request
{
    /**
     * @param array{
     *     Region?: string|null,
     *     CatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Expression?: string|null,
     *     AuditContext?: Shapes\AuditContext|null,
     *     SupportedPermissionTypes: list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'>,
     *     NextToken?: string|null,
     *     Segment?: Shapes\Segment|null,
     *     MaxResults?: int<1, 1000>|null,
     *     QuerySessionContext?: Shapes\QuerySessionContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
