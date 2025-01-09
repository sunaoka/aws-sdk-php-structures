<?php

namespace Sunaoka\Aws\Structures\Glue\GetTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $Expression
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $TransactionId
 * @property \Aws\Api\DateTimeResult $QueryAsOfTime
 * @property bool $IncludeStatusDetails
 * @property list<'NAME'|'TABLE_TYPE'> $AttributesToGet
 */
class GetTablesRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     Expression?: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     TransactionId?: string,
     *     QueryAsOfTime?: \Aws\Api\DateTimeResult,
     *     IncludeStatusDetails?: bool,
     *     AttributesToGet?: list<'NAME'|'TABLE_TYPE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
