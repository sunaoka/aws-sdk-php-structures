<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\StartAutomationEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendedActionId
 * @property string|null $clientToken
 */
class StartAutomationEventRequest extends Request
{
    /**
     * @param array{
     *     recommendedActionId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
