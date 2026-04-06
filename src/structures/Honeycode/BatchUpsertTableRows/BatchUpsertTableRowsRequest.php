<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchUpsertTableRows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property string $tableId
 * @property list<Shapes\UpsertRowData> $rowsToUpsert
 * @property string|null $clientRequestToken
 */
class BatchUpsertTableRowsRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     tableId: string,
     *     rowsToUpsert: list<Shapes\UpsertRowData>,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
