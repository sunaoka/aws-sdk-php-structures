<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListBrowserProfiles;

trait ListBrowserProfilesTrait
{
    /**
     * @param ListBrowserProfilesRequest $args
     * @return ListBrowserProfilesResponse
     */
    public function listBrowserProfiles(ListBrowserProfilesRequest $args)
    {
        $result = parent::listBrowserProfiles($args->toArray());
        return new ListBrowserProfilesResponse($result->toArray());
    }
}
