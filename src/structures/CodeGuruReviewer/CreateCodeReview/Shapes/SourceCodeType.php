<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommitDiffSourceCodeType $CommitDiff
 * @property RepositoryHeadSourceCodeType $RepositoryHead
 * @property BranchDiffSourceCodeType $BranchDiff
 * @property S3BucketRepository $S3BucketRepository
 * @property RequestMetadata $RequestMetadata
 */
class SourceCodeType extends Shape
{
    /**
     * @param array{
     *     CommitDiff?: CommitDiffSourceCodeType,
     *     RepositoryHead?: RepositoryHeadSourceCodeType,
     *     BranchDiff?: BranchDiffSourceCodeType,
     *     S3BucketRepository?: S3BucketRepository,
     *     RequestMetadata?: RequestMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
