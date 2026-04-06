<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2;

class PinpointSMSVoiceV2Client extends \Aws\PinpointSMSVoiceV2\PinpointSMSVoiceV2Client
{
    use AssociateOriginationIdentity\AssociateOriginationIdentityTrait;
    use CreateConfigurationSet\CreateConfigurationSetTrait;
    use CreateEventDestination\CreateEventDestinationTrait;
    use CreateOptOutList\CreateOptOutListTrait;
    use CreatePool\CreatePoolTrait;
    use DeleteConfigurationSet\DeleteConfigurationSetTrait;
    use DeleteDefaultMessageType\DeleteDefaultMessageTypeTrait;
    use DeleteDefaultSenderId\DeleteDefaultSenderIdTrait;
    use DeleteEventDestination\DeleteEventDestinationTrait;
    use DeleteKeyword\DeleteKeywordTrait;
    use DeleteOptOutList\DeleteOptOutListTrait;
    use DeleteOptedOutNumber\DeleteOptedOutNumberTrait;
    use DeletePool\DeletePoolTrait;
    use DeleteTextMessageSpendLimitOverride\DeleteTextMessageSpendLimitOverrideTrait;
    use DeleteVoiceMessageSpendLimitOverride\DeleteVoiceMessageSpendLimitOverrideTrait;
    use DescribeAccountAttributes\DescribeAccountAttributesTrait;
    use DescribeAccountLimits\DescribeAccountLimitsTrait;
    use DescribeConfigurationSets\DescribeConfigurationSetsTrait;
    use DescribeKeywords\DescribeKeywordsTrait;
    use DescribeOptOutLists\DescribeOptOutListsTrait;
    use DescribeOptedOutNumbers\DescribeOptedOutNumbersTrait;
    use DescribePhoneNumbers\DescribePhoneNumbersTrait;
    use DescribePools\DescribePoolsTrait;
    use DescribeSenderIds\DescribeSenderIdsTrait;
    use DescribeSpendLimits\DescribeSpendLimitsTrait;
    use DisassociateOriginationIdentity\DisassociateOriginationIdentityTrait;
    use ListPoolOriginationIdentities\ListPoolOriginationIdentitiesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutKeyword\PutKeywordTrait;
    use PutOptedOutNumber\PutOptedOutNumberTrait;
    use ReleasePhoneNumber\ReleasePhoneNumberTrait;
    use RequestPhoneNumber\RequestPhoneNumberTrait;
    use SendTextMessage\SendTextMessageTrait;
    use SendVoiceMessage\SendVoiceMessageTrait;
    use SetDefaultMessageType\SetDefaultMessageTypeTrait;
    use SetDefaultSenderId\SetDefaultSenderIdTrait;
    use SetTextMessageSpendLimitOverride\SetTextMessageSpendLimitOverrideTrait;
    use SetVoiceMessageSpendLimitOverride\SetVoiceMessageSpendLimitOverrideTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateEventDestination\UpdateEventDestinationTrait;
    use UpdatePhoneNumber\UpdatePhoneNumberTrait;
    use UpdatePool\UpdatePoolTrait;
}
