<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListOpenCypherQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queryId
 * @property string $queryString
 * @property QueryEvalStats $queryEvalStats
 */
class GremlinQueryStatus extends Shape
{
    /**
     * @param array{
     *     queryId?: string,
     *     queryString?: string,
     *     queryEvalStats?: QueryEvalStats
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
