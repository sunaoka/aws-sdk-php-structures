<?php

namespace Sunaoka\Aws\Structures\Honeycode\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
