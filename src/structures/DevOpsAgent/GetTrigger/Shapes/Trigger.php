<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $triggerId
 * @property string $agentSpaceId
 * @property string $type
 * @property TriggerCondition $condition
 * @property TriggerAction $action
 * @property string $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Trigger extends Shape
{
    /**
     * @param array{
     *     triggerId: string,
     *     agentSpaceId: string,
     *     type: string,
     *     condition: TriggerCondition,
     *     action: TriggerAction,
     *     status: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
