<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\PutProjectEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorCode
 * @property string $errorMessage
 * @property string $eventId
 */
class PutProjectEventsResultEntry extends Shape
{
    /**
     * @param array{
     *     errorCode?: string,
     *     errorMessage?: string,
     *     eventId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
