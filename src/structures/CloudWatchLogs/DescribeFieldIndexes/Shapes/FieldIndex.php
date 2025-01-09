<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeFieldIndexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupIdentifier
 * @property string $fieldIndexName
 * @property int<0, max> $lastScanTime
 * @property int<0, max> $firstEventTime
 * @property int<0, max> $lastEventTime
 */
class FieldIndex extends Shape
{
    /**
     * @param array{
     *     logGroupIdentifier?: string,
     *     fieldIndexName?: string,
     *     lastScanTime?: int<0, max>,
     *     firstEventTime?: int<0, max>,
     *     lastEventTime?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
