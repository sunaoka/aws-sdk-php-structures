<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
