<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $triggerId
 * @property string|null $status
 * @property string|null $clientToken
 */
class UpdateTriggerRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     triggerId: string,
     *     status?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
