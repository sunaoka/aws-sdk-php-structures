<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventId
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class PutEventsResultEntry extends Shape
{
    /**
     * @param array{
     *     EventId?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
