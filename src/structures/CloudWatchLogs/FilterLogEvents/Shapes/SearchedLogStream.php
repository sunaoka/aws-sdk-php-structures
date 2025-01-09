<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logStreamName
 * @property bool $searchedCompletely
 */
class SearchedLogStream extends Shape
{
    /**
     * @param array{
     *     logStreamName?: string,
     *     searchedCompletely?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
