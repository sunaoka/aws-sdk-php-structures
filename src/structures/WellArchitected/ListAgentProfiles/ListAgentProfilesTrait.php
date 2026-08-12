<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentProfiles;

trait ListAgentProfilesTrait
{
    /**
     * @param ListAgentProfilesRequest $args
     * @return ListAgentProfilesResponse
     */
    public function listAgentProfiles(ListAgentProfilesRequest $args)
    {
        $result = parent::listAgentProfiles($args->toArray());
        return new ListAgentProfilesResponse($result->toArray());
    }
}
