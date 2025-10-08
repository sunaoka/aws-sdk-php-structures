<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetCalculatedAttributeForProfile;

trait GetCalculatedAttributeForProfileTrait
{
    /**
     * @param GetCalculatedAttributeForProfileRequest $args
     * @return GetCalculatedAttributeForProfileResponse
     */
    public function getCalculatedAttributeForProfile(GetCalculatedAttributeForProfileRequest $args)
    {
        $result = parent::getCalculatedAttributeForProfile($args->toArray());
        return new GetCalculatedAttributeForProfileResponse($result->toArray());
    }
}
