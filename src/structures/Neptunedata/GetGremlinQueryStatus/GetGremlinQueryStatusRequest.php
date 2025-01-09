<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetGremlinQueryStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 */
class GetGremlinQueryStatusRequest extends Request
{
    /**
     * @param array{queryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
