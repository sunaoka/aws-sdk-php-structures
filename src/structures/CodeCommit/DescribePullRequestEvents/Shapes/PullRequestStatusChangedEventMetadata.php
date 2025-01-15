<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN'|'CLOSED'|null $pullRequestStatus
 */
class PullRequestStatusChangedEventMetadata extends Shape
{
    /**
     * @param array{pullRequestStatus?: 'OPEN'|'CLOSED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
