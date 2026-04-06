<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $QueryId
 * @property string|null $NextToken
 * @property list<Shapes\Row> $Rows
 * @property list<Shapes\ColumnInfo> $ColumnInfo
 * @property Shapes\QueryStatus|null $QueryStatus
 * @property Shapes\QueryInsightsResponse|null $QueryInsightsResponse
 */
class QueryResponse extends Response
{
}
