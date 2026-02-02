<?php

namespace Sunaoka\Aws\Structures\Wickr;

class WickrClient extends \Aws\Wickr\WickrClient
{
    use BatchCreateUser\BatchCreateUserTrait;
    use BatchDeleteUser\BatchDeleteUserTrait;
    use BatchLookupUserUname\BatchLookupUserUnameTrait;
    use BatchReinviteUser\BatchReinviteUserTrait;
    use BatchResetDevicesForUser\BatchResetDevicesForUserTrait;
    use BatchToggleUserSuspendStatus\BatchToggleUserSuspendStatusTrait;
    use CreateBot\CreateBotTrait;
    use CreateDataRetentionBot\CreateDataRetentionBotTrait;
    use CreateDataRetentionBotChallenge\CreateDataRetentionBotChallengeTrait;
    use CreateNetwork\CreateNetworkTrait;
    use CreateSecurityGroup\CreateSecurityGroupTrait;
    use DeleteBot\DeleteBotTrait;
    use DeleteDataRetentionBot\DeleteDataRetentionBotTrait;
    use DeleteNetwork\DeleteNetworkTrait;
    use DeleteSecurityGroup\DeleteSecurityGroupTrait;
    use GetBot\GetBotTrait;
    use GetBotsCount\GetBotsCountTrait;
    use GetDataRetentionBot\GetDataRetentionBotTrait;
    use GetGuestUserHistoryCount\GetGuestUserHistoryCountTrait;
    use GetNetwork\GetNetworkTrait;
    use GetNetworkSettings\GetNetworkSettingsTrait;
    use GetOidcInfo\GetOidcInfoTrait;
    use GetSecurityGroup\GetSecurityGroupTrait;
    use GetUser\GetUserTrait;
    use GetUsersCount\GetUsersCountTrait;
    use ListBlockedGuestUsers\ListBlockedGuestUsersTrait;
    use ListBots\ListBotsTrait;
    use ListDevicesForUser\ListDevicesForUserTrait;
    use ListGuestUsers\ListGuestUsersTrait;
    use ListNetworks\ListNetworksTrait;
    use ListSecurityGroupUsers\ListSecurityGroupUsersTrait;
    use ListSecurityGroups\ListSecurityGroupsTrait;
    use ListUsers\ListUsersTrait;
    use RegisterOidcConfig\RegisterOidcConfigTrait;
    use RegisterOidcConfigTest\RegisterOidcConfigTestTrait;
    use UpdateBot\UpdateBotTrait;
    use UpdateDataRetention\UpdateDataRetentionTrait;
    use UpdateGuestUser\UpdateGuestUserTrait;
    use UpdateNetwork\UpdateNetworkTrait;
    use UpdateNetworkSettings\UpdateNetworkSettingsTrait;
    use UpdateSecurityGroup\UpdateSecurityGroupTrait;
    use UpdateUser\UpdateUserTrait;
}
