<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $revisionId
 * @property 'OVERRIDE'|'REVOKE'|null $overrideStatus
 */
class ApprovalRuleOverriddenEventMetadata extends Shape
{
    /**
     * @param array{
     *     revisionId?: string|null,
     *     overrideStatus?: 'OVERRIDE'|'REVOKE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
