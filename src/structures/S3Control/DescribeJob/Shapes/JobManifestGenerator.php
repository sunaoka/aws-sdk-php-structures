<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3JobManifestGenerator $S3JobManifestGenerator
 */
class JobManifestGenerator extends Shape
{
    /**
     * @param array{S3JobManifestGenerator?: S3JobManifestGenerator} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
