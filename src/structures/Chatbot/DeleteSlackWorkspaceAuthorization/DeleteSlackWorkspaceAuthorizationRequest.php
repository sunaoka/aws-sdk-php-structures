<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteSlackWorkspaceAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SlackTeamId
 */
class DeleteSlackWorkspaceAuthorizationRequest extends Request
{
    /**
     * @param array{SlackTeamId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
