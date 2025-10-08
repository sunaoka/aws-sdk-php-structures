<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsConfiguredTeams;

trait ListMicrosoftTeamsConfiguredTeamsTrait
{
    /**
     * @param ListMicrosoftTeamsConfiguredTeamsRequest $args
     * @return ListMicrosoftTeamsConfiguredTeamsResponse
     */
    public function listMicrosoftTeamsConfiguredTeams(ListMicrosoftTeamsConfiguredTeamsRequest $args)
    {
        $result = parent::listMicrosoftTeamsConfiguredTeams($args->toArray());
        return new ListMicrosoftTeamsConfiguredTeamsResponse($result->toArray());
    }
}
