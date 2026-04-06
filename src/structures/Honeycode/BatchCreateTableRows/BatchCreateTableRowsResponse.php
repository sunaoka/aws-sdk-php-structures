<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchCreateTableRows;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $workbookCursor
 * @property array<string, string> $createdRows
 * @property list<Shapes\FailedBatchItem>|null $failedBatchItems
 */
class BatchCreateTableRowsResponse extends Response
{
}
