<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateScheduledQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduledQueryArn
 * @property 'ENABLED'|'DISABLED' $State
 */
class UpdateScheduledQueryRequest extends Request
{
    /**
     * @param array{
     *     ScheduledQueryArn: string,
     *     State: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
