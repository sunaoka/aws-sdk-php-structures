<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestMetricFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $filterPattern
 * @property list<string> $logEventMessages
 */
class TestMetricFilterRequest extends Request
{
    /**
     * @param array{
     *     filterPattern: string,
     *     logEventMessages: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
