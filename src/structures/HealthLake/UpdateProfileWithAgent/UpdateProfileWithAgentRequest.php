<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateProfileWithAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property Shapes\AgentInputMessage $InputMessage
 * @property string|null $ConversationId
 */
class UpdateProfileWithAgentRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     InputMessage: Shapes\AgentInputMessage,
     *     ConversationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
