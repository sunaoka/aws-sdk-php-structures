<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class PutEventsResultEntry extends Shape
{
    /**
     * @param array{
     *     EventId?: string,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
