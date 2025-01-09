<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'INHERIT' $IssueManagementStatus
 * @property 'AUTO'|'MANUAL' $IssueManagementType
 * @property string $JiraProjectKey
 */
class WorkloadJiraConfigurationInput extends Shape
{
    /**
     * @param array{
     *     IssueManagementStatus?: 'ENABLED'|'DISABLED'|'INHERIT',
     *     IssueManagementType?: 'AUTO'|'MANUAL',
     *     JiraProjectKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
