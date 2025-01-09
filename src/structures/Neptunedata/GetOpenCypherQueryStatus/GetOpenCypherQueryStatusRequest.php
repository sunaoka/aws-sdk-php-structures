<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetOpenCypherQueryStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 */
class GetOpenCypherQueryStatusRequest extends Request
{
    /**
     * @param array{queryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
