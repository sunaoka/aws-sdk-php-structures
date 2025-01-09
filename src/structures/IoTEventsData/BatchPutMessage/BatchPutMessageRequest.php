<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchPutMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Message> $messages
 */
class BatchPutMessageRequest extends Request
{
    /**
     * @param array{messages: list<Shapes\Message>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
