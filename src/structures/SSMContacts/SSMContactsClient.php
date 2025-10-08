<?php

namespace Sunaoka\Aws\Structures\SSMContacts;

class SSMContactsClient extends \Aws\SSMContacts\SSMContactsClient
{
    use AcceptPage\AcceptPageTrait;
    use ActivateContactChannel\ActivateContactChannelTrait;
    use CreateContact\CreateContactTrait;
    use CreateContactChannel\CreateContactChannelTrait;
    use CreateRotation\CreateRotationTrait;
    use CreateRotationOverride\CreateRotationOverrideTrait;
    use DeactivateContactChannel\DeactivateContactChannelTrait;
    use DeleteContact\DeleteContactTrait;
    use DeleteContactChannel\DeleteContactChannelTrait;
    use DeleteRotation\DeleteRotationTrait;
    use DeleteRotationOverride\DeleteRotationOverrideTrait;
    use DescribeEngagement\DescribeEngagementTrait;
    use DescribePage\DescribePageTrait;
    use GetContact\GetContactTrait;
    use GetContactChannel\GetContactChannelTrait;
    use GetContactPolicy\GetContactPolicyTrait;
    use GetRotation\GetRotationTrait;
    use GetRotationOverride\GetRotationOverrideTrait;
    use ListContactChannels\ListContactChannelsTrait;
    use ListContacts\ListContactsTrait;
    use ListEngagements\ListEngagementsTrait;
    use ListPageReceipts\ListPageReceiptsTrait;
    use ListPageResolutions\ListPageResolutionsTrait;
    use ListPagesByContact\ListPagesByContactTrait;
    use ListPagesByEngagement\ListPagesByEngagementTrait;
    use ListPreviewRotationShifts\ListPreviewRotationShiftsTrait;
    use ListRotationOverrides\ListRotationOverridesTrait;
    use ListRotationShifts\ListRotationShiftsTrait;
    use ListRotations\ListRotationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutContactPolicy\PutContactPolicyTrait;
    use SendActivationCode\SendActivationCodeTrait;
    use StartEngagement\StartEngagementTrait;
    use StopEngagement\StopEngagementTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateContact\UpdateContactTrait;
    use UpdateContactChannel\UpdateContactChannelTrait;
    use UpdateRotation\UpdateRotationTrait;
}
