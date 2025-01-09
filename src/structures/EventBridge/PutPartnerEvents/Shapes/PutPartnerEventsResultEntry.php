<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutPartnerEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class PutPartnerEventsResultEntry extends Shape
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
