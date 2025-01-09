<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN'|'CLOSED' $pullRequestStatus
 */
class PullRequestStatusChangedEventMetadata extends Shape
{
    /**
     * @param array{pullRequestStatus?: 'OPEN'|'CLOSED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
