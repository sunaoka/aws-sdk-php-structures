<?php

namespace Sunaoka\Aws\Structures\Chatbot;

class ChatbotClient extends \Aws\Chatbot\ChatbotClient
{
    use CreateChimeWebhookConfiguration\CreateChimeWebhookConfigurationTrait;
    use CreateMicrosoftTeamsChannelConfiguration\CreateMicrosoftTeamsChannelConfigurationTrait;
    use CreateSlackChannelConfiguration\CreateSlackChannelConfigurationTrait;
    use DeleteChimeWebhookConfiguration\DeleteChimeWebhookConfigurationTrait;
    use DeleteMicrosoftTeamsChannelConfiguration\DeleteMicrosoftTeamsChannelConfigurationTrait;
    use DeleteMicrosoftTeamsConfiguredTeam\DeleteMicrosoftTeamsConfiguredTeamTrait;
    use DeleteMicrosoftTeamsUserIdentity\DeleteMicrosoftTeamsUserIdentityTrait;
    use DeleteSlackChannelConfiguration\DeleteSlackChannelConfigurationTrait;
    use DeleteSlackUserIdentity\DeleteSlackUserIdentityTrait;
    use DeleteSlackWorkspaceAuthorization\DeleteSlackWorkspaceAuthorizationTrait;
    use DescribeChimeWebhookConfigurations\DescribeChimeWebhookConfigurationsTrait;
    use DescribeSlackChannelConfigurations\DescribeSlackChannelConfigurationsTrait;
    use DescribeSlackUserIdentities\DescribeSlackUserIdentitiesTrait;
    use DescribeSlackWorkspaces\DescribeSlackWorkspacesTrait;
    use GetAccountPreferences\GetAccountPreferencesTrait;
    use GetMicrosoftTeamsChannelConfiguration\GetMicrosoftTeamsChannelConfigurationTrait;
    use ListMicrosoftTeamsChannelConfigurations\ListMicrosoftTeamsChannelConfigurationsTrait;
    use ListMicrosoftTeamsConfiguredTeams\ListMicrosoftTeamsConfiguredTeamsTrait;
    use ListMicrosoftTeamsUserIdentities\ListMicrosoftTeamsUserIdentitiesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccountPreferences\UpdateAccountPreferencesTrait;
    use UpdateChimeWebhookConfiguration\UpdateChimeWebhookConfigurationTrait;
    use UpdateMicrosoftTeamsChannelConfiguration\UpdateMicrosoftTeamsChannelConfigurationTrait;
    use UpdateSlackChannelConfiguration\UpdateSlackChannelConfigurationTrait;
}
