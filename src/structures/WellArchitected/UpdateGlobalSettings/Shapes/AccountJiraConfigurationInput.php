<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateGlobalSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $IssueManagementStatus
 * @property 'AUTO'|'MANUAL'|null $IssueManagementType
 * @property string|null $JiraProjectKey
 * @property 'NOT_CONFIGURED'|null $IntegrationStatus
 */
class AccountJiraConfigurationInput extends Shape
{
    /**
     * @param array{
     *     IssueManagementStatus?: 'ENABLED'|'DISABLED'|null,
     *     IssueManagementType?: 'AUTO'|'MANUAL'|null,
     *     JiraProjectKey?: string|null,
     *     IntegrationStatus?: 'NOT_CONFIGURED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
