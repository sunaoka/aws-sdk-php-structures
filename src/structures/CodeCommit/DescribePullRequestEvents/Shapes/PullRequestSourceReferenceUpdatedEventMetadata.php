<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property string $beforeCommitId
 * @property string $afterCommitId
 * @property string $mergeBase
 */
class PullRequestSourceReferenceUpdatedEventMetadata extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     beforeCommitId?: string,
     *     afterCommitId?: string,
     *     mergeBase?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
