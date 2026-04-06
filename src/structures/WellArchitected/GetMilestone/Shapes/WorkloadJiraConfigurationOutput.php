<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetMilestone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'INHERIT'|null $IssueManagementStatus
 * @property 'AUTO'|'MANUAL'|null $IssueManagementType
 * @property string|null $JiraProjectKey
 * @property string|null $StatusMessage
 */
class WorkloadJiraConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     IssueManagementStatus?: 'ENABLED'|'DISABLED'|'INHERIT'|null,
     *     IssueManagementType?: 'AUTO'|'MANUAL'|null,
     *     JiraProjectKey?: string|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
