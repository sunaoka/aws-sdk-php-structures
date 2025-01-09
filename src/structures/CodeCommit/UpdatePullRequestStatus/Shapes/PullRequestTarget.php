<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property string $sourceReference
 * @property string $destinationReference
 * @property string $destinationCommit
 * @property string $sourceCommit
 * @property string $mergeBase
 * @property MergeMetadata $mergeMetadata
 */
class PullRequestTarget extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     sourceReference?: string,
     *     destinationReference?: string,
     *     destinationCommit?: string,
     *     sourceCommit?: string,
     *     mergeBase?: string,
     *     mergeMetadata?: MergeMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
