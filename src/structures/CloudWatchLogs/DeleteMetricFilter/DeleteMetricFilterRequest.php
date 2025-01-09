<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteMetricFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $filterName
 */
class DeleteMetricFilterRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     filterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
