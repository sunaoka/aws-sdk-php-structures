<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<10, max>|null $PollingTime
 * @property int<1, max>|null $RecordPollingLimit
 */
class StreamingDataPreviewOptions extends Shape
{
    /**
     * @param array{
     *     PollingTime?: int<10, max>|null,
     *     RecordPollingLimit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
