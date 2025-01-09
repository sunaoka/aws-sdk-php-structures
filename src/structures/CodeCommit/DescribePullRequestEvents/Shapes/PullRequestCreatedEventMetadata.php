<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property string $sourceCommitId
 * @property string $destinationCommitId
 * @property string $mergeBase
 */
class PullRequestCreatedEventMetadata extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     sourceCommitId?: string,
     *     destinationCommitId?: string,
     *     mergeBase?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
