<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImageTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageDigest
 * @property int $imageSizeInBytes
 * @property \Aws\Api\DateTimeResult $imagePushedAt
 * @property string $imageManifestMediaType
 * @property string $artifactMediaType
 */
class ReferencedImageDetail extends Shape
{
    /**
     * @param array{
     *     imageDigest?: string,
     *     imageSizeInBytes?: int,
     *     imagePushedAt?: \Aws\Api\DateTimeResult,
     *     imageManifestMediaType?: string,
     *     artifactMediaType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
