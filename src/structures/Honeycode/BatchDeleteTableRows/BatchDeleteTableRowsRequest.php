<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchDeleteTableRows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property string $tableId
 * @property list<string> $rowIds
 * @property string|null $clientRequestToken
 */
class BatchDeleteTableRowsRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     tableId: string,
     *     rowIds: list<string>,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
