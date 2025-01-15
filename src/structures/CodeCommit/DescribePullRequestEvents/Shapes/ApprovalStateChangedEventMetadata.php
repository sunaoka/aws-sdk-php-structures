<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $revisionId
 * @property 'APPROVE'|'REVOKE'|null $approvalStatus
 */
class ApprovalStateChangedEventMetadata extends Shape
{
    /**
     * @param array{
     *     revisionId?: string|null,
     *     approvalStatus?: 'APPROVE'|'REVOKE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
