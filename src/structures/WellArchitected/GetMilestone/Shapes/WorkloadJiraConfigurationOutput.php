<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetMilestone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'INHERIT' $IssueManagementStatus
 * @property 'AUTO'|'MANUAL' $IssueManagementType
 * @property string $JiraProjectKey
 * @property string $StatusMessage
 */
class WorkloadJiraConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     IssueManagementStatus?: 'ENABLED'|'DISABLED'|'INHERIT',
     *     IssueManagementType?: 'AUTO'|'MANUAL',
     *     JiraProjectKey?: string,
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
