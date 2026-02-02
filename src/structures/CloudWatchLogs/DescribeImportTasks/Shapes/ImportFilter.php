<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $startEventTime
 * @property int<0, max>|null $endEventTime
 */
class ImportFilter extends Shape
{
    /**
     * @param array{
     *     startEventTime?: int<0, max>|null,
     *     endEventTime?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
