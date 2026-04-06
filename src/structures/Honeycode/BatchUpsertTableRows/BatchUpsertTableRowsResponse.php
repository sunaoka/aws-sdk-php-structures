<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchUpsertTableRows;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\UpsertRowsResult> $rows
 * @property int $workbookCursor
 * @property list<Shapes\FailedBatchItem>|null $failedBatchItems
 */
class BatchUpsertTableRowsResponse extends Response
{
}
