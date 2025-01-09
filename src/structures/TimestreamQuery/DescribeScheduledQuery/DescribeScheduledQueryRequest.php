<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduledQueryArn
 */
class DescribeScheduledQueryRequest extends Request
{
    /**
     * @param array{ScheduledQueryArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
