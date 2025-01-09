<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $revisionId
 * @property 'APPROVE'|'REVOKE' $approvalStatus
 */
class ApprovalStateChangedEventMetadata extends Shape
{
    /**
     * @param array{
     *     revisionId?: string,
     *     approvalStatus?: 'APPROVE'|'REVOKE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
