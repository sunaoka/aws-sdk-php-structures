<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelGremlinQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 */
class CancelGremlinQueryRequest extends Request
{
    /**
     * @param array{queryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
