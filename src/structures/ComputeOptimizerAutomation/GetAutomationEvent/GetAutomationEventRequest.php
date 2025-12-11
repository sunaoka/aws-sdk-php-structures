<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\GetAutomationEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventId
 */
class GetAutomationEventRequest extends Request
{
    /**
     * @param array{eventId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
