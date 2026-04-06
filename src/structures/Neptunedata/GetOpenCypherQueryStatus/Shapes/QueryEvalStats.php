<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetOpenCypherQueryStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $waited
 * @property int|null $elapsed
 * @property bool|null $cancelled
 * @property Document|null $subqueries
 */
class QueryEvalStats extends Shape
{
    /**
     * @param array{
     *     waited?: int|null,
     *     elapsed?: int|null,
     *     cancelled?: bool|null,
     *     subqueries?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
