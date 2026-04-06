<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteMicrosoftTeamsConfiguredTeam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TeamId
 */
class DeleteMicrosoftTeamsConfiguredTeamRequest extends Request
{
    /**
     * @param array{TeamId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
