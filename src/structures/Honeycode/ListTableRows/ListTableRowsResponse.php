<?php

namespace Sunaoka\Aws\Structures\Honeycode\ListTableRows;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $columnIds
 * @property list<Shapes\TableRow> $rows
 * @property list<string>|null $rowIdsNotFound
 * @property string|null $nextToken
 * @property int $workbookCursor
 */
class ListTableRowsResponse extends Response
{
}
