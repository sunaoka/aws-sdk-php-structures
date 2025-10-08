<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging;

class ChimeSDKMessagingClient extends \Aws\ChimeSDKMessaging\ChimeSDKMessagingClient
{
    use AssociateChannelFlow\AssociateChannelFlowTrait;
    use BatchCreateChannelMembership\BatchCreateChannelMembershipTrait;
    use ChannelFlowCallback\ChannelFlowCallbackTrait;
    use CreateChannel\CreateChannelTrait;
    use CreateChannelBan\CreateChannelBanTrait;
    use CreateChannelFlow\CreateChannelFlowTrait;
    use CreateChannelMembership\CreateChannelMembershipTrait;
    use CreateChannelModerator\CreateChannelModeratorTrait;
    use DeleteChannel\DeleteChannelTrait;
    use DeleteChannelBan\DeleteChannelBanTrait;
    use DeleteChannelFlow\DeleteChannelFlowTrait;
    use DeleteChannelMembership\DeleteChannelMembershipTrait;
    use DeleteChannelMessage\DeleteChannelMessageTrait;
    use DeleteChannelModerator\DeleteChannelModeratorTrait;
    use DeleteMessagingStreamingConfigurations\DeleteMessagingStreamingConfigurationsTrait;
    use DescribeChannel\DescribeChannelTrait;
    use DescribeChannelBan\DescribeChannelBanTrait;
    use DescribeChannelFlow\DescribeChannelFlowTrait;
    use DescribeChannelMembership\DescribeChannelMembershipTrait;
    use DescribeChannelMembershipForAppInstanceUser\DescribeChannelMembershipForAppInstanceUserTrait;
    use DescribeChannelModeratedByAppInstanceUser\DescribeChannelModeratedByAppInstanceUserTrait;
    use DescribeChannelModerator\DescribeChannelModeratorTrait;
    use DisassociateChannelFlow\DisassociateChannelFlowTrait;
    use GetChannelMembershipPreferences\GetChannelMembershipPreferencesTrait;
    use GetChannelMessage\GetChannelMessageTrait;
    use GetChannelMessageStatus\GetChannelMessageStatusTrait;
    use GetMessagingSessionEndpoint\GetMessagingSessionEndpointTrait;
    use GetMessagingStreamingConfigurations\GetMessagingStreamingConfigurationsTrait;
    use ListChannelBans\ListChannelBansTrait;
    use ListChannelFlows\ListChannelFlowsTrait;
    use ListChannelMemberships\ListChannelMembershipsTrait;
    use ListChannelMembershipsForAppInstanceUser\ListChannelMembershipsForAppInstanceUserTrait;
    use ListChannelMessages\ListChannelMessagesTrait;
    use ListChannelModerators\ListChannelModeratorsTrait;
    use ListChannels\ListChannelsTrait;
    use ListChannelsAssociatedWithChannelFlow\ListChannelsAssociatedWithChannelFlowTrait;
    use ListChannelsModeratedByAppInstanceUser\ListChannelsModeratedByAppInstanceUserTrait;
    use ListSubChannels\ListSubChannelsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutChannelExpirationSettings\PutChannelExpirationSettingsTrait;
    use PutChannelMembershipPreferences\PutChannelMembershipPreferencesTrait;
    use PutMessagingStreamingConfigurations\PutMessagingStreamingConfigurationsTrait;
    use RedactChannelMessage\RedactChannelMessageTrait;
    use SearchChannels\SearchChannelsTrait;
    use SendChannelMessage\SendChannelMessageTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateChannel\UpdateChannelTrait;
    use UpdateChannelFlow\UpdateChannelFlowTrait;
    use UpdateChannelMessage\UpdateChannelMessageTrait;
    use UpdateChannelReadMarker\UpdateChannelReadMarkerTrait;
}
