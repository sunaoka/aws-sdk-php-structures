<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Spaces
 * @property list<string>|null $ActionConnectors
 * @property string $AwsAccountId
 * @property string $AgentId
 * @property string $Name
 * @property string|null $Description
 * @property string|null $IconId
 * @property list<string>|null $StarterPrompts
 * @property string|null $WelcomeMessage
 * @property 'PREVIEW'|'PUBLISHED'|null $AgentLifecycle
 * @property Shapes\CustomPromptInput|null $CustomPromptInput
 */
class CreateAgentRequest extends Request
{
    /**
     * @param array{
     *     Spaces?: list<string>|null,
     *     ActionConnectors?: list<string>|null,
     *     AwsAccountId: string,
     *     AgentId: string,
     *     Name: string,
     *     Description?: string|null,
     *     IconId?: string|null,
     *     StarterPrompts?: list<string>|null,
     *     WelcomeMessage?: string|null,
     *     AgentLifecycle?: 'PREVIEW'|'PUBLISHED'|null,
     *     CustomPromptInput?: Shapes\CustomPromptInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
