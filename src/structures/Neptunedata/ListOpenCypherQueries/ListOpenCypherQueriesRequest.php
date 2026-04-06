<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListOpenCypherQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $includeWaiting
 */
class ListOpenCypherQueriesRequest extends Request
{
    /**
     * @param array{includeWaiting?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
