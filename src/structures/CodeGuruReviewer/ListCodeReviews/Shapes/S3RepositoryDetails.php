<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketName
 * @property CodeArtifacts|null $CodeArtifacts
 */
class S3RepositoryDetails extends Shape
{
    /**
     * @param array{
     *     BucketName?: string|null,
     *     CodeArtifacts?: CodeArtifacts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
