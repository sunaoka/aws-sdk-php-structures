<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetThirdPartyJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|null $type
 * @property S3ArtifactLocation|null $s3Location
 */
class ArtifactLocation extends Shape
{
    /**
     * @param array{
     *     type?: 'S3'|null,
     *     s3Location?: S3ArtifactLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
