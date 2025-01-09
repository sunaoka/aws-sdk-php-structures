<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetGlobalSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONFIGURED'|'NOT_CONFIGURED' $IntegrationStatus
 * @property 'ENABLED'|'DISABLED' $IssueManagementStatus
 * @property 'AUTO'|'MANUAL' $IssueManagementType
 * @property string $Subdomain
 * @property string $JiraProjectKey
 * @property string $StatusMessage
 */
class AccountJiraConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     IntegrationStatus?: 'CONFIGURED'|'NOT_CONFIGURED',
     *     IssueManagementStatus?: 'ENABLED'|'DISABLED',
     *     IssueManagementType?: 'AUTO'|'MANUAL',
     *     Subdomain?: string,
     *     JiraProjectKey?: string,
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
