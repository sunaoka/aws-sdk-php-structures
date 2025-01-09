<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $QueryId
 * @property string $NextToken
 * @property list<Shapes\Row> $Rows
 * @property list<Shapes\ColumnInfo> $ColumnInfo
 * @property Shapes\QueryStatus $QueryStatus
 * @property Shapes\QueryInsightsResponse $QueryInsightsResponse
 */
class QueryResponse extends Response
{
}
