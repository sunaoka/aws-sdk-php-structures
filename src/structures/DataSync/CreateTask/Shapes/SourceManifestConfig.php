<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ManifestConfig $S3
 */
class SourceManifestConfig extends Shape
{
    /**
     * @param array{S3: S3ManifestConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
