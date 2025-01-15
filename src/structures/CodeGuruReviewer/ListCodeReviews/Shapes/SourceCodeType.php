<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommitDiffSourceCodeType|null $CommitDiff
 * @property RepositoryHeadSourceCodeType|null $RepositoryHead
 * @property BranchDiffSourceCodeType|null $BranchDiff
 * @property S3BucketRepository|null $S3BucketRepository
 * @property RequestMetadata|null $RequestMetadata
 */
class SourceCodeType extends Shape
{
    /**
     * @param array{
     *     CommitDiff?: CommitDiffSourceCodeType|null,
     *     RepositoryHead?: RepositoryHeadSourceCodeType|null,
     *     BranchDiff?: BranchDiffSourceCodeType|null,
     *     S3BucketRepository?: S3BucketRepository|null,
     *     RequestMetadata?: RequestMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
