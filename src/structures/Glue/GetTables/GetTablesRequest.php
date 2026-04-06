<?php

namespace Sunaoka\Aws\Structures\Glue\GetTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string|null $Expression
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $TransactionId
 * @property \Aws\Api\DateTimeResult|null $QueryAsOfTime
 * @property Shapes\AuditContext|null $AuditContext
 * @property bool|null $IncludeStatusDetails
 * @property list<'NAME'|'TABLE_TYPE'>|null $AttributesToGet
 */
class GetTablesRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     Expression?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     TransactionId?: string|null,
     *     QueryAsOfTime?: \Aws\Api\DateTimeResult|null,
     *     AuditContext?: Shapes\AuditContext|null,
     *     IncludeStatusDetails?: bool|null,
     *     AttributesToGet?: list<'NAME'|'TABLE_TYPE'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
