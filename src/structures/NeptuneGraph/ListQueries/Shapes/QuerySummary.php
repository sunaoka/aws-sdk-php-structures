<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $queryString
 * @property int $waited
 * @property int $elapsed
 * @property 'RUNNING'|'WAITING'|'CANCELLING' $state
 */
class QuerySummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     queryString?: string,
     *     waited?: int,
     *     elapsed?: int,
     *     state?: 'RUNNING'|'WAITING'|'CANCELLING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
