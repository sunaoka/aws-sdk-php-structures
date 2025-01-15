<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DatabaseName
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
