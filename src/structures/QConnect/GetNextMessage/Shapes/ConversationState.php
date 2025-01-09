<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'FAILED'|'REJECTED' $reason
 * @property 'CLOSED'|'READY'|'PROCESSING' $status
 */
class ConversationState extends Shape
{
    /**
     * @param array{
     *     reason?: 'SUCCESS'|'FAILED'|'REJECTED',
     *     status: 'CLOSED'|'READY'|'PROCESSING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
