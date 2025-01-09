<?php

namespace Sunaoka\Aws\Structures\OSIS\StopPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsLoggingEnabled
 * @property CloudWatchLogDestination $CloudWatchLogDestination
 */
class LogPublishingOptions extends Shape
{
    /**
     * @param array{
     *     IsLoggingEnabled?: bool,
     *     CloudWatchLogDestination?: CloudWatchLogDestination
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
