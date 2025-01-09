<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeDataMigrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CDCStartPosition
 * @property \Aws\Api\DateTimeResult $CDCStartTime
 * @property \Aws\Api\DateTimeResult $CDCStopTime
 * @property string $SlotName
 */
class SourceDataSetting extends Shape
{
    /**
     * @param array{
     *     CDCStartPosition?: string,
     *     CDCStartTime?: \Aws\Api\DateTimeResult,
     *     CDCStopTime?: \Aws\Api\DateTimeResult,
     *     SlotName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
