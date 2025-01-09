<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeFieldIndexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupIdentifier
 * @property string $fieldIndexName
 * @property int $lastScanTime
 * @property int $firstEventTime
 * @property int $lastEventTime
 */
class FieldIndex extends Shape
{
    /**
     * @param array{
     *     logGroupIdentifier?: string,
     *     fieldIndexName?: string,
     *     lastScanTime?: int,
     *     firstEventTime?: int,
     *     lastEventTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
