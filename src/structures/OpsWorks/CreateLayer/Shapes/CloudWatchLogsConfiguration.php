<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateLayer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property list<CloudWatchLogsLogStream>|null $LogStreams
 */
class CloudWatchLogsConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     LogStreams?: list<CloudWatchLogsLogStream>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
