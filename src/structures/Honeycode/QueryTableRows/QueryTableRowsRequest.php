<?php

namespace Sunaoka\Aws\Structures\Honeycode\QueryTableRows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property string $tableId
 * @property Shapes\Filter $filterFormula
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class QueryTableRowsRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     tableId: string,
     *     filterFormula: Shapes\Filter,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
