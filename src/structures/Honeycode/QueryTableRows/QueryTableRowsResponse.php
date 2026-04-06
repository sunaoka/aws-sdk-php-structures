<?php

namespace Sunaoka\Aws\Structures\Honeycode\QueryTableRows;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $columnIds
 * @property list<Shapes\TableRow> $rows
 * @property string|null $nextToken
 * @property int $workbookCursor
 */
class QueryTableRowsResponse extends Response
{
}
