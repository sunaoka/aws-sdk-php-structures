<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteGremlinExplainQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gremlinQuery
 */
class ExecuteGremlinExplainQueryRequest extends Request
{
    /**
     * @param array{gremlinQuery: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
