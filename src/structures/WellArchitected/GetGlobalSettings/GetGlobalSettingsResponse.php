<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetGlobalSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENABLED'|'DISABLED' $OrganizationSharingStatus
 * @property 'ENABLED'|'DISABLED' $DiscoveryIntegrationStatus
 * @property Shapes\AccountJiraConfigurationOutput $JiraConfiguration
 */
class GetGlobalSettingsResponse extends Response
{
}
