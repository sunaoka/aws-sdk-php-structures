<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogStreamName
 * @property string $Timestamp
 */
class PipeTargetCloudWatchLogsParameters extends Shape
{
    /**
     * @param array{
     *     LogStreamName?: string,
     *     Timestamp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
