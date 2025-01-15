<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logStreamName
 * @property bool|null $searchedCompletely
 */
class SearchedLogStream extends Shape
{
    /**
     * @param array{
     *     logStreamName?: string|null,
     *     searchedCompletely?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
