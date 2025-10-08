<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteMicrosoftTeamsConfiguredTeam;

trait DeleteMicrosoftTeamsConfiguredTeamTrait
{
    /**
     * @param DeleteMicrosoftTeamsConfiguredTeamRequest $args
     * @return DeleteMicrosoftTeamsConfiguredTeamResponse
     */
    public function deleteMicrosoftTeamsConfiguredTeam(DeleteMicrosoftTeamsConfiguredTeamRequest $args)
    {
        $result = parent::deleteMicrosoftTeamsConfiguredTeam($args->toArray());
        return new DeleteMicrosoftTeamsConfiguredTeamResponse($result->toArray());
    }
}
