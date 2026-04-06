<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchCreateTableRows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property string $tableId
 * @property list<Shapes\CreateRowData> $rowsToCreate
 * @property string|null $clientRequestToken
 */
class BatchCreateTableRowsRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     tableId: string,
     *     rowsToCreate: list<Shapes\CreateRowData>,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
