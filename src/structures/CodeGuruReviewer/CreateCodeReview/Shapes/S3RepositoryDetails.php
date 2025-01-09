<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property CodeArtifacts $CodeArtifacts
 */
class S3RepositoryDetails extends Shape
{
    /**
     * @param array{
     *     BucketName?: string,
     *     CodeArtifacts?: CodeArtifacts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
