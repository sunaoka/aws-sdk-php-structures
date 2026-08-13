<?php

namespace Sunaoka\Aws\Structures\Connect\StartAssistantContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\AiAgentInput $AiAgent
 * @property Shapes\ParticipantDetails $ParticipantDetails
 * @property Shapes\ChatMessage|null $InitialMessage
 * @property array<string, string>|null $Attributes
 * @property string|null $ClientToken
 * @property Shapes\PersistentChat|null $PersistentChat
 * @property string|null $RelatedContactId
 */
class StartAssistantContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AiAgent: Shapes\AiAgentInput,
     *     ParticipantDetails: Shapes\ParticipantDetails,
     *     InitialMessage?: Shapes\ChatMessage|null,
     *     Attributes?: array<string, string>|null,
     *     ClientToken?: string|null,
     *     PersistentChat?: Shapes\PersistentChat|null,
     *     RelatedContactId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
