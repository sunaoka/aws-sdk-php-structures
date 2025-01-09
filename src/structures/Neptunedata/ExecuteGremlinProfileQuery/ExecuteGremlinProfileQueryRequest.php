<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteGremlinProfileQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gremlinQuery
 * @property bool $results
 * @property int $chop
 * @property string $serializer
 * @property bool $indexOps
 */
class ExecuteGremlinProfileQueryRequest extends Request
{
    /**
     * @param array{
     *     gremlinQuery: string,
     *     results?: bool,
     *     chop?: int,
     *     serializer?: string,
     *     indexOps?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
