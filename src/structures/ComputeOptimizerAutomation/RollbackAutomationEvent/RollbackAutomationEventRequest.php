<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\RollbackAutomationEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventId
 * @property string|null $clientToken
 */
class RollbackAutomationEventRequest extends Request
{
    /**
     * @param array{
     *     eventId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
