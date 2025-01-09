<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PollingTime
 * @property int $RecordPollingLimit
 */
class StreamingDataPreviewOptions extends Shape
{
    /**
     * @param array{
     *     PollingTime?: int,
     *     RecordPollingLimit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
