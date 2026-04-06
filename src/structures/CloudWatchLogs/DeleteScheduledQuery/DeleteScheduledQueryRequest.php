<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteScheduledQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DeleteScheduledQueryRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
