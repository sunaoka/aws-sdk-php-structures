<?php

namespace Sunaoka\Aws\Structures\ConnectHealth;

class ConnectHealthClient extends \Aws\ConnectHealth\ConnectHealthClient
{
    use ActivateSubscription\ActivateSubscriptionTrait;
    use CreateDomain\CreateDomainTrait;
    use CreateSubscription\CreateSubscriptionTrait;
    use DeactivateSubscription\DeactivateSubscriptionTrait;
    use DeleteDomain\DeleteDomainTrait;
    use GetDomain\GetDomainTrait;
    use GetMedicalScribeListeningSession\GetMedicalScribeListeningSessionTrait;
    use GetPatientInsightsJob\GetPatientInsightsJobTrait;
    use GetSubscription\GetSubscriptionTrait;
    use ListDomains\ListDomainsTrait;
    use ListSubscriptions\ListSubscriptionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartPatientInsightsJob\StartPatientInsightsJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
