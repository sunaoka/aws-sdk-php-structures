<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteEventsByEventType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventTypeName
 */
class DeleteEventsByEventTypeRequest extends Request
{
    /**
     * @param array{eventTypeName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
