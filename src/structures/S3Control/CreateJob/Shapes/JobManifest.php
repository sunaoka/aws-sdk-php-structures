<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobManifestSpec $Spec
 * @property JobManifestLocation $Location
 */
class JobManifest extends Shape
{
    /**
     * @param array{
     *     Spec: JobManifestSpec,
     *     Location: JobManifestLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
