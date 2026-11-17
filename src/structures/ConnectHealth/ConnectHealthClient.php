<?php

namespace Sunaoka\Aws\Structures\ConnectHealth;

class ConnectHealthClient extends \Aws\ConnectHealth\ConnectHealthClient
{
    use ActivateSubscription\ActivateSubscriptionTrait;
    use CreateDataset\CreateDatasetTrait;
    use CreateDomain\CreateDomainTrait;
    use CreateSubscription\CreateSubscriptionTrait;
    use DeactivateSubscription\DeactivateSubscriptionTrait;
    use DeleteDataset\DeleteDatasetTrait;
    use DeleteDomain\DeleteDomainTrait;
    use GetDataset\GetDatasetTrait;
    use GetDomain\GetDomainTrait;
    use GetMedicalCodingJob\GetMedicalCodingJobTrait;
    use GetMedicalScribeListeningSession\GetMedicalScribeListeningSessionTrait;
    use GetPatientInsightsJob\GetPatientInsightsJobTrait;
    use GetSubscription\GetSubscriptionTrait;
    use ListDatasets\ListDatasetsTrait;
    use ListDomains\ListDomainsTrait;
    use ListSubscriptions\ListSubscriptionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartMedicalCodingJob\StartMedicalCodingJobTrait;
    use StartPatientInsightsJob\StartPatientInsightsJobTrait;
    use SubmitFeedback\SubmitFeedbackTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
