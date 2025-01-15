<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\PutProjectEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorCode
 * @property string|null $errorMessage
 * @property string|null $eventId
 */
class PutProjectEventsResultEntry extends Shape
{
    /**
     * @param array{
     *     errorCode?: string|null,
     *     errorMessage?: string|null,
     *     eventId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
