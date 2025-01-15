<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property string|null $sourceCommitId
 * @property string|null $destinationCommitId
 * @property string|null $mergeBase
 */
class PullRequestCreatedEventMetadata extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     sourceCommitId?: string|null,
     *     destinationCommitId?: string|null,
     *     mergeBase?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
