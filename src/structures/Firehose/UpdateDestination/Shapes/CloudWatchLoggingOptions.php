<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $LogGroupName
 * @property string $LogStreamName
 */
class CloudWatchLoggingOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     LogGroupName?: string,
     *     LogStreamName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
