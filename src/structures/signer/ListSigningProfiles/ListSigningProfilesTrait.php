<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningProfiles;

trait ListSigningProfilesTrait
{
    /**
     * @param ListSigningProfilesRequest $args
     * @return ListSigningProfilesResponse
     */
    public function listSigningProfiles(ListSigningProfilesRequest $args)
    {
        $result = parent::listSigningProfiles($args->toArray());
        return new ListSigningProfilesResponse($result->toArray());
    }
}
