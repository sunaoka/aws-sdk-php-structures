<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetGlobalSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENABLED'|'DISABLED'|null $OrganizationSharingStatus
 * @property 'ENABLED'|'DISABLED'|null $DiscoveryIntegrationStatus
 * @property Shapes\AccountJiraConfigurationOutput|null $JiraConfiguration
 */
class GetGlobalSettingsResponse extends Response
{
}
