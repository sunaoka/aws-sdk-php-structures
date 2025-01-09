<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListOpenCypherQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $includeWaiting
 */
class ListOpenCypherQueriesRequest extends Request
{
    /**
     * @param array{includeWaiting?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
