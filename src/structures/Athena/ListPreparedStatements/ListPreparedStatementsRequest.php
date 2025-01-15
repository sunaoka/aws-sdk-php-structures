<?php

namespace Sunaoka\Aws\Structures\Athena\ListPreparedStatements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListPreparedStatementsRequest extends Request
{
    /**
     * @param array{
     *     WorkGroup: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
