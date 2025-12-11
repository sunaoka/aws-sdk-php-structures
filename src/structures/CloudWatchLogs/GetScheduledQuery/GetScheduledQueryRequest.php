<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetScheduledQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetScheduledQueryRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
