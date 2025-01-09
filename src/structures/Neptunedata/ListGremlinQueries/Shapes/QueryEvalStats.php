<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListGremlinQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $waited
 * @property int $elapsed
 * @property bool $cancelled
 * @property Document $subqueries
 */
class QueryEvalStats extends Shape
{
    /**
     * @param array{
     *     waited?: int,
     *     elapsed?: int,
     *     cancelled?: bool,
     *     subqueries?: Document
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
