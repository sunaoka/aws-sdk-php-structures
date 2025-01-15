<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property string|null $destinationReference
 * @property MergeMetadata|null $mergeMetadata
 */
class PullRequestMergedStateChangedEventMetadata extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     destinationReference?: string|null,
     *     mergeMetadata?: MergeMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
