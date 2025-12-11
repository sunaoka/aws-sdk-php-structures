<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROCESSING'|'FAILED'|'REJECTED'|null $MessageProcessingStatus
 */
class MessageProcessingMetadata extends Shape
{
    /**
     * @param array{MessageProcessingStatus?: 'PROCESSING'|'FAILED'|'REJECTED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
