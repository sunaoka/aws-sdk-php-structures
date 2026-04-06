<?php

namespace Sunaoka\Aws\Structures\Iot\CreatePackageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location|null $s3Location
 */
class PackageVersionArtifact extends Shape
{
    /**
     * @param array{s3Location?: S3Location|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
