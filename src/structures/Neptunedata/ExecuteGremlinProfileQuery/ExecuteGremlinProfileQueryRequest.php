<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteGremlinProfileQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gremlinQuery
 * @property bool|null $results
 * @property int|null $chop
 * @property string|null $serializer
 * @property bool|null $indexOps
 */
class ExecuteGremlinProfileQueryRequest extends Request
{
    /**
     * @param array{
     *     gremlinQuery: string,
     *     results?: bool|null,
     *     chop?: int|null,
     *     serializer?: string|null,
     *     indexOps?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
