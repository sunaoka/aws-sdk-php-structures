<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property string $destinationReference
 * @property MergeMetadata $mergeMetadata
 */
class PullRequestMergedStateChangedEventMetadata extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     destinationReference?: string,
     *     mergeMetadata?: MergeMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
