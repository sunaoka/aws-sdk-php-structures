<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $LogGroupName
 * @property string|null $LogStreamName
 */
class CloudWatchLogsUpdateInput extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     LogGroupName?: string|null,
     *     LogStreamName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
