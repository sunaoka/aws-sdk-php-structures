<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLOSED'|'READY'|'PROCESSING' $status
 * @property 'SUCCESS'|'FAILED'|'REJECTED'|null $reason
 */
class ConversationState extends Shape
{
    /**
     * @param array{
     *     status: 'CLOSED'|'READY'|'PROCESSING',
     *     reason?: 'SUCCESS'|'FAILED'|'REJECTED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
