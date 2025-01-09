<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DeleteScheduledQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduledQueryArn
 */
class DeleteScheduledQueryRequest extends Request
{
    /**
     * @param array{ScheduledQueryArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
