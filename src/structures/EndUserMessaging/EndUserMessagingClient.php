<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging;

class EndUserMessagingClient extends \Aws\EndUserMessaging\EndUserMessagingClient
{
    use CreateBrandProfile\CreateBrandProfileTrait;
    use CreateBrandProfileAttributes\CreateBrandProfileAttributesTrait;
    use CreateBrandProfileFromRegistration\CreateBrandProfileFromRegistrationTrait;
    use CreateNotifyCodeConfiguration\CreateNotifyCodeConfigurationTrait;
    use CreateRegistrationsFromBrandProfile\CreateRegistrationsFromBrandProfileTrait;
    use DeleteBrandProfile\DeleteBrandProfileTrait;
    use DeleteBrandProfileAttribute\DeleteBrandProfileAttributeTrait;
    use DeleteNotifyCodeConfiguration\DeleteNotifyCodeConfigurationTrait;
    use GetBrandProfile\GetBrandProfileTrait;
    use GetBrandProfileAttribute\GetBrandProfileAttributeTrait;
    use GetJob\GetJobTrait;
    use GetNotifyCodeConfiguration\GetNotifyCodeConfigurationTrait;
    use ListBrandProfileAttributes\ListBrandProfileAttributesTrait;
    use ListBrandProfiles\ListBrandProfilesTrait;
    use ListJobs\ListJobsTrait;
    use ListNotifyCodeConfigurations\ListNotifyCodeConfigurationsTrait;
    use ListRegistrationsFromBrandProfile\ListRegistrationsFromBrandProfileTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SendNotifyCodeVerification\SendNotifyCodeVerificationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBrandProfile\UpdateBrandProfileTrait;
    use UpdateBrandProfileAttribute\UpdateBrandProfileAttributeTrait;
    use UpdateBrandProfileFromRegistration\UpdateBrandProfileFromRegistrationTrait;
    use UpdateNotifyCodeConfiguration\UpdateNotifyCodeConfigurationTrait;
    use UpdateRegistrationsFromBrandProfile\UpdateRegistrationsFromBrandProfileTrait;
    use ValidateNotifyCodeVerification\ValidateNotifyCodeVerificationTrait;
}
