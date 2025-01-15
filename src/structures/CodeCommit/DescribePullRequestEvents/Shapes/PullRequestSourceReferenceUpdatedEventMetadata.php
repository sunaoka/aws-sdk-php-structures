<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property string|null $beforeCommitId
 * @property string|null $afterCommitId
 * @property string|null $mergeBase
 */
class PullRequestSourceReferenceUpdatedEventMetadata extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     beforeCommitId?: string|null,
     *     afterCommitId?: string|null,
     *     mergeBase?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
