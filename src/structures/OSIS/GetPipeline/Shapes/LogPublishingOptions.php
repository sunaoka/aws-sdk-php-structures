<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsLoggingEnabled
 * @property CloudWatchLogDestination|null $CloudWatchLogDestination
 */
class LogPublishingOptions extends Shape
{
    /**
     * @param array{
     *     IsLoggingEnabled?: bool|null,
     *     CloudWatchLogDestination?: CloudWatchLogDestination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
