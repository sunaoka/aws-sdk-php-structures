<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
