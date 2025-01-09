<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateLayer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property list<CloudWatchLogsLogStream> $LogStreams
 */
class CloudWatchLogsConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     LogStreams?: list<CloudWatchLogsLogStream>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
