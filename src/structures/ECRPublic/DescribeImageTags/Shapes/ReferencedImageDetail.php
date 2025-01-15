<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImageTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $imageDigest
 * @property int|null $imageSizeInBytes
 * @property \Aws\Api\DateTimeResult|null $imagePushedAt
 * @property string|null $imageManifestMediaType
 * @property string|null $artifactMediaType
 */
class ReferencedImageDetail extends Shape
{
    /**
     * @param array{
     *     imageDigest?: string|null,
     *     imageSizeInBytes?: int|null,
     *     imagePushedAt?: \Aws\Api\DateTimeResult|null,
     *     imageManifestMediaType?: string|null,
     *     artifactMediaType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
