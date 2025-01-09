<?php

namespace Sunaoka\Aws\Structures\Athena\ListPreparedStatements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListPreparedStatementsRequest extends Request
{
    /**
     * @param array{
     *     WorkGroup: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
