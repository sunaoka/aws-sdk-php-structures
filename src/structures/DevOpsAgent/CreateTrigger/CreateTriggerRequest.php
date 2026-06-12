<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $type
 * @property Shapes\TriggerCondition $condition
 * @property Shapes\TriggerAction $action
 * @property string|null $status
 * @property string|null $clientToken
 */
class CreateTriggerRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     type: string,
     *     condition: Shapes\TriggerCondition,
     *     action: Shapes\TriggerAction,
     *     status?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
