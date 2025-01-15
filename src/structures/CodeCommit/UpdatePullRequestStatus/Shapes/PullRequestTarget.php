<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property string|null $sourceReference
 * @property string|null $destinationReference
 * @property string|null $destinationCommit
 * @property string|null $sourceCommit
 * @property string|null $mergeBase
 * @property MergeMetadata|null $mergeMetadata
 */
class PullRequestTarget extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     sourceReference?: string|null,
     *     destinationReference?: string|null,
     *     destinationCommit?: string|null,
     *     sourceCommit?: string|null,
     *     mergeBase?: string|null,
     *     mergeMetadata?: MergeMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
