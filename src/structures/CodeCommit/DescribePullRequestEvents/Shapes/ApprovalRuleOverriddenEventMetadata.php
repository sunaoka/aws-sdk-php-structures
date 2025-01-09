<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $revisionId
 * @property 'OVERRIDE'|'REVOKE' $overrideStatus
 */
class ApprovalRuleOverriddenEventMetadata extends Shape
{
    /**
     * @param array{
     *     revisionId?: string,
     *     overrideStatus?: 'OVERRIDE'|'REVOKE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
