<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StopQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 */
class StopQueryRequest extends Request
{
    /**
     * @param array{queryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
