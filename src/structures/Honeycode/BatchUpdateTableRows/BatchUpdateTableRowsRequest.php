<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchUpdateTableRows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property string $tableId
 * @property list<Shapes\UpdateRowData> $rowsToUpdate
 * @property string|null $clientRequestToken
 */
class BatchUpdateTableRowsRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     tableId: string,
     *     rowsToUpdate: list<Shapes\UpdateRowData>,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
