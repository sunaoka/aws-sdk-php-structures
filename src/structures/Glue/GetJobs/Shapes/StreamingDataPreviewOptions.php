<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<10, max> $PollingTime
 * @property int<1, max> $RecordPollingLimit
 */
class StreamingDataPreviewOptions extends Shape
{
    /**
     * @param array{
     *     PollingTime?: int<10, max>,
     *     RecordPollingLimit?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
