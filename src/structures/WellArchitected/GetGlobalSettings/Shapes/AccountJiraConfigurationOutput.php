<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetGlobalSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONFIGURED'|'NOT_CONFIGURED'|null $IntegrationStatus
 * @property 'ENABLED'|'DISABLED'|null $IssueManagementStatus
 * @property 'AUTO'|'MANUAL'|null $IssueManagementType
 * @property string|null $Subdomain
 * @property string|null $JiraProjectKey
 * @property string|null $StatusMessage
 */
class AccountJiraConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     IntegrationStatus?: 'CONFIGURED'|'NOT_CONFIGURED'|null,
     *     IssueManagementStatus?: 'ENABLED'|'DISABLED'|null,
     *     IssueManagementType?: 'AUTO'|'MANUAL'|null,
     *     Subdomain?: string|null,
     *     JiraProjectKey?: string|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
