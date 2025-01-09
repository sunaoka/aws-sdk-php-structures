<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteGremlinQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gremlinQuery
 * @property string $serializer
 */
class ExecuteGremlinQueryRequest extends Request
{
    /**
     * @param array{
     *     gremlinQuery: string,
     *     serializer?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
