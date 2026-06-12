<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DeleteTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $triggerId
 */
class DeleteTriggerRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     triggerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
