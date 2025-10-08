<?php

namespace Sunaoka\Aws\Structures\Sns;

class SnsClient extends \Aws\Sns\SnsClient
{
    use AddPermission\AddPermissionTrait;
    use CheckIfPhoneNumberIsOptedOut\CheckIfPhoneNumberIsOptedOutTrait;
    use ConfirmSubscription\ConfirmSubscriptionTrait;
    use CreatePlatformApplication\CreatePlatformApplicationTrait;
    use CreatePlatformEndpoint\CreatePlatformEndpointTrait;
    use CreateSMSSandboxPhoneNumber\CreateSMSSandboxPhoneNumberTrait;
    use CreateTopic\CreateTopicTrait;
    use DeleteEndpoint\DeleteEndpointTrait;
    use DeletePlatformApplication\DeletePlatformApplicationTrait;
    use DeleteSMSSandboxPhoneNumber\DeleteSMSSandboxPhoneNumberTrait;
    use DeleteTopic\DeleteTopicTrait;
    use GetDataProtectionPolicy\GetDataProtectionPolicyTrait;
    use GetEndpointAttributes\GetEndpointAttributesTrait;
    use GetPlatformApplicationAttributes\GetPlatformApplicationAttributesTrait;
    use GetSMSAttributes\GetSMSAttributesTrait;
    use GetSMSSandboxAccountStatus\GetSMSSandboxAccountStatusTrait;
    use GetSubscriptionAttributes\GetSubscriptionAttributesTrait;
    use GetTopicAttributes\GetTopicAttributesTrait;
    use ListEndpointsByPlatformApplication\ListEndpointsByPlatformApplicationTrait;
    use ListOriginationNumbers\ListOriginationNumbersTrait;
    use ListPhoneNumbersOptedOut\ListPhoneNumbersOptedOutTrait;
    use ListPlatformApplications\ListPlatformApplicationsTrait;
    use ListSMSSandboxPhoneNumbers\ListSMSSandboxPhoneNumbersTrait;
    use ListSubscriptions\ListSubscriptionsTrait;
    use ListSubscriptionsByTopic\ListSubscriptionsByTopicTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTopics\ListTopicsTrait;
    use OptInPhoneNumber\OptInPhoneNumberTrait;
    use Publish\PublishTrait;
    use PublishBatch\PublishBatchTrait;
    use PutDataProtectionPolicy\PutDataProtectionPolicyTrait;
    use RemovePermission\RemovePermissionTrait;
    use SetEndpointAttributes\SetEndpointAttributesTrait;
    use SetPlatformApplicationAttributes\SetPlatformApplicationAttributesTrait;
    use SetSMSAttributes\SetSMSAttributesTrait;
    use SetSubscriptionAttributes\SetSubscriptionAttributesTrait;
    use SetTopicAttributes\SetTopicAttributesTrait;
    use Subscribe\SubscribeTrait;
    use TagResource\TagResourceTrait;
    use Unsubscribe\UnsubscribeTrait;
    use UntagResource\UntagResourceTrait;
    use VerifySMSSandboxPhoneNumber\VerifySMSSandboxPhoneNumberTrait;
}
