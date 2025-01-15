<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateGlobalSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ENABLED'|'DISABLED'|null $OrganizationSharingStatus
 * @property 'ENABLED'|'DISABLED'|null $DiscoveryIntegrationStatus
 * @property Shapes\AccountJiraConfigurationInput|null $JiraConfiguration
 */
class UpdateGlobalSettingsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationSharingStatus?: 'ENABLED'|'DISABLED'|null,
     *     DiscoveryIntegrationStatus?: 'ENABLED'|'DISABLED'|null,
     *     JiraConfiguration?: Shapes\AccountJiraConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
