<?php

namespace Sunaoka\Aws\Structures\Keyspaces\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 * @property string $keyspaceName
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>,
     *     keyspaceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
