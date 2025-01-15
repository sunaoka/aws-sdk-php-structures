<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogStreamName
 * @property string|null $Timestamp
 */
class PipeTargetCloudWatchLogsParameters extends Shape
{
    /**
     * @param array{
     *     LogStreamName?: string|null,
     *     Timestamp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
