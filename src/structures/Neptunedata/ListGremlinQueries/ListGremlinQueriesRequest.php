<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListGremlinQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $includeWaiting
 */
class ListGremlinQueriesRequest extends Request
{
    /**
     * @param array{includeWaiting?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
