<?php

namespace Sunaoka\Aws\Structures\Glue\ListStatements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property string|null $RequestOrigin
 * @property string|null $NextToken
 */
class ListStatementsRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     RequestOrigin?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
