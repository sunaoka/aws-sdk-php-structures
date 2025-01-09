<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateGlobalSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ENABLED'|'DISABLED' $OrganizationSharingStatus
 * @property 'ENABLED'|'DISABLED' $DiscoveryIntegrationStatus
 * @property Shapes\AccountJiraConfigurationInput $JiraConfiguration
 */
class UpdateGlobalSettingsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationSharingStatus?: 'ENABLED'|'DISABLED',
     *     DiscoveryIntegrationStatus?: 'ENABLED'|'DISABLED',
     *     JiraConfiguration?: Shapes\AccountJiraConfigurationInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
