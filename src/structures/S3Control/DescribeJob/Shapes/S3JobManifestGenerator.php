<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExpectedBucketOwner
 * @property string $SourceBucket
 * @property S3ManifestOutputLocation|null $ManifestOutputLocation
 * @property JobManifestGeneratorFilter|null $Filter
 * @property bool $EnableManifestOutput
 */
class S3JobManifestGenerator extends Shape
{
    /**
     * @param array{
     *     ExpectedBucketOwner?: string|null,
     *     SourceBucket: string,
     *     ManifestOutputLocation?: S3ManifestOutputLocation|null,
     *     Filter?: JobManifestGeneratorFilter|null,
     *     EnableManifestOutput: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
