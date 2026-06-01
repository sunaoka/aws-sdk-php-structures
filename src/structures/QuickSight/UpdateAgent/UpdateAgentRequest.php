<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AgentId
 * @property string $AwsAccountId
 * @property string $Name
 * @property string|null $Description
 * @property string|null $IconId
 * @property list<string>|null $StarterPrompts
 * @property string|null $WelcomeMessage
 * @property Shapes\CustomPromptInput|null $CustomPromptInput
 * @property list<string>|null $SpacesToAdd
 * @property list<string>|null $SpacesToRemove
 * @property list<string>|null $ActionConnectorsToAdd
 * @property list<string>|null $ActionConnectorsToRemove
 */
class UpdateAgentRequest extends Request
{
    /**
     * @param array{
     *     AgentId: string,
     *     AwsAccountId: string,
     *     Name: string,
     *     Description?: string|null,
     *     IconId?: string|null,
     *     StarterPrompts?: list<string>|null,
     *     WelcomeMessage?: string|null,
     *     CustomPromptInput?: Shapes\CustomPromptInput|null,
     *     SpacesToAdd?: list<string>|null,
     *     SpacesToRemove?: list<string>|null,
     *     ActionConnectorsToAdd?: list<string>|null,
     *     ActionConnectorsToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
