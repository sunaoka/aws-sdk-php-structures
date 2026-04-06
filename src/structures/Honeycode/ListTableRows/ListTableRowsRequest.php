<?php

namespace Sunaoka\Aws\Structures\Honeycode\ListTableRows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property string $tableId
 * @property list<string>|null $rowIds
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListTableRowsRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     tableId: string,
     *     rowIds?: list<string>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
