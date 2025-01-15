<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3JobManifestGenerator|null $S3JobManifestGenerator
 */
class JobManifestGenerator extends Shape
{
    /**
     * @param array{S3JobManifestGenerator?: S3JobManifestGenerator|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
