<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Region
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $Expression
 * @property Shapes\AuditContext $AuditContext
 * @property list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'> $SupportedPermissionTypes
 * @property string $NextToken
 * @property Shapes\Segment $Segment
 * @property int<1, 1000> $MaxResults
 * @property Shapes\QuerySessionContext $QuerySessionContext
 */
class GetUnfilteredPartitionsMetadataRequest extends Request
{
    /**
     * @param array{
     *     Region?: string,
     *     CatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Expression?: string,
     *     AuditContext?: Shapes\AuditContext,
     *     SupportedPermissionTypes: list<'COLUMN_PERMISSION'|'CELL_FILTER_PERMISSION'|'NESTED_PERMISSION'|'NESTED_CELL_PERMISSION'>,
     *     NextToken?: string,
     *     Segment?: Shapes\Segment,
     *     MaxResults?: int<1, 1000>,
     *     QuerySessionContext?: Shapes\QuerySessionContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
