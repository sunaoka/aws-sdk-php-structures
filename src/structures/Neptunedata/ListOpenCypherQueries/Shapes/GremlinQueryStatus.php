<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListOpenCypherQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $queryId
 * @property string|null $queryString
 * @property QueryEvalStats|null $queryEvalStats
 */
class GremlinQueryStatus extends Shape
{
    /**
     * @param array{
     *     queryId?: string|null,
     *     queryString?: string|null,
     *     queryEvalStats?: QueryEvalStats|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
