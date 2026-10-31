<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutAccountPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupName
 * @property string|null $currentRetention
 * @property string|null $proposedRetention
 * @property int<0, max>|null $storedBytes
 */
class LogGroupImpact extends Shape
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     currentRetention?: string|null,
     *     proposedRetention?: string|null,
     *     storedBytes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
