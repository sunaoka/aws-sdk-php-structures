<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExpectedBucketOwner
 * @property string $SourceBucket
 * @property S3ManifestOutputLocation $ManifestOutputLocation
 * @property JobManifestGeneratorFilter $Filter
 * @property bool $EnableManifestOutput
 */
class S3JobManifestGenerator extends Shape
{
    /**
     * @param array{
     *     ExpectedBucketOwner?: string,
     *     SourceBucket: string,
     *     ManifestOutputLocation?: S3ManifestOutputLocation,
     *     Filter?: JobManifestGeneratorFilter,
     *     EnableManifestOutput: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
