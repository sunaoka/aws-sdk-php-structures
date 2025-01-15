<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'INHERIT'|null $IssueManagementStatus
 * @property 'AUTO'|'MANUAL'|null $IssueManagementType
 * @property string|null $JiraProjectKey
 */
class WorkloadJiraConfigurationInput extends Shape
{
    /**
     * @param array{
     *     IssueManagementStatus?: 'ENABLED'|'DISABLED'|'INHERIT'|null,
     *     IssueManagementType?: 'AUTO'|'MANUAL'|null,
     *     JiraProjectKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
