<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateGlobalSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $IssueManagementStatus
 * @property 'AUTO'|'MANUAL' $IssueManagementType
 * @property string $JiraProjectKey
 * @property 'NOT_CONFIGURED' $IntegrationStatus
 */
class AccountJiraConfigurationInput extends Shape
{
    /**
     * @param array{
     *     IssueManagementStatus?: 'ENABLED'|'DISABLED',
     *     IssueManagementType?: 'AUTO'|'MANUAL',
     *     JiraProjectKey?: string,
     *     IntegrationStatus?: 'NOT_CONFIGURED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
