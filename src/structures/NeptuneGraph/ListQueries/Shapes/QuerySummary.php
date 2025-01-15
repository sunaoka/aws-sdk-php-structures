<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $queryString
 * @property int|null $waited
 * @property int|null $elapsed
 * @property 'RUNNING'|'WAITING'|'CANCELLING'|null $state
 */
class QuerySummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     queryString?: string|null,
     *     waited?: int|null,
     *     elapsed?: int|null,
     *     state?: 'RUNNING'|'WAITING'|'CANCELLING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
