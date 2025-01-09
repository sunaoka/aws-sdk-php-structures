<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3' $type
 * @property S3ArtifactLocation $s3Location
 */
class ArtifactLocation extends Shape
{
    /**
     * @param array{
     *     type?: 'S3',
     *     s3Location?: S3ArtifactLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
