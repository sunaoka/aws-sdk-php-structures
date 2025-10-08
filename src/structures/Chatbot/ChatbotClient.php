<?php

namespace Sunaoka\Aws\Structures\Chatbot;

class ChatbotClient extends \Aws\Chatbot\ChatbotClient
{
    use AssociateToConfiguration\AssociateToConfigurationTrait;
    use CreateChimeWebhookConfiguration\CreateChimeWebhookConfigurationTrait;
    use CreateCustomAction\CreateCustomActionTrait;
    use CreateMicrosoftTeamsChannelConfiguration\CreateMicrosoftTeamsChannelConfigurationTrait;
    use CreateSlackChannelConfiguration\CreateSlackChannelConfigurationTrait;
    use DeleteChimeWebhookConfiguration\DeleteChimeWebhookConfigurationTrait;
    use DeleteCustomAction\DeleteCustomActionTrait;
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
    use DisassociateFromConfiguration\DisassociateFromConfigurationTrait;
    use GetAccountPreferences\GetAccountPreferencesTrait;
    use GetCustomAction\GetCustomActionTrait;
    use GetMicrosoftTeamsChannelConfiguration\GetMicrosoftTeamsChannelConfigurationTrait;
    use ListAssociations\ListAssociationsTrait;
    use ListCustomActions\ListCustomActionsTrait;
    use ListMicrosoftTeamsChannelConfigurations\ListMicrosoftTeamsChannelConfigurationsTrait;
    use ListMicrosoftTeamsConfiguredTeams\ListMicrosoftTeamsConfiguredTeamsTrait;
    use ListMicrosoftTeamsUserIdentities\ListMicrosoftTeamsUserIdentitiesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccountPreferences\UpdateAccountPreferencesTrait;
    use UpdateChimeWebhookConfiguration\UpdateChimeWebhookConfigurationTrait;
    use UpdateCustomAction\UpdateCustomActionTrait;
    use UpdateMicrosoftTeamsChannelConfiguration\UpdateMicrosoftTeamsChannelConfigurationTrait;
    use UpdateSlackChannelConfiguration\UpdateSlackChannelConfigurationTrait;
}
