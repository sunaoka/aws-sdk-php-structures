<?php

namespace Sunaoka\Aws\Structures\Glue\ListStatements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property string $RequestOrigin
 * @property string $NextToken
 */
class ListStatementsRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     RequestOrigin?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
