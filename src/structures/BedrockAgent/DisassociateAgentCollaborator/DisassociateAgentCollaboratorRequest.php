<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DisassociateAgentCollaborator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $collaboratorId
 */
class DisassociateAgentCollaboratorRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     collaboratorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
