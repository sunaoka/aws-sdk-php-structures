<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsUserIdentities;

trait ListMicrosoftTeamsUserIdentitiesTrait
{
    /**
     * @param ListMicrosoftTeamsUserIdentitiesRequest $args
     * @return ListMicrosoftTeamsUserIdentitiesResponse
     */
    public function listMicrosoftTeamsUserIdentities(ListMicrosoftTeamsUserIdentitiesRequest $args)
    {
        $result = parent::listMicrosoftTeamsUserIdentities($args->toArray());
        return new ListMicrosoftTeamsUserIdentitiesResponse($result->toArray());
    }
}
