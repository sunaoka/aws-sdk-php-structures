<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFieldLevelEncryptionProfiles;

trait ListFieldLevelEncryptionProfilesTrait
{
    /**
     * @param ListFieldLevelEncryptionProfilesRequest $args
     * @return ListFieldLevelEncryptionProfilesResponse
     */
    public function listFieldLevelEncryptionProfiles(ListFieldLevelEncryptionProfilesRequest $args)
    {
        $result = parent::listFieldLevelEncryptionProfiles($args->toArray());
        return new ListFieldLevelEncryptionProfilesResponse($result->toArray());
    }
}
