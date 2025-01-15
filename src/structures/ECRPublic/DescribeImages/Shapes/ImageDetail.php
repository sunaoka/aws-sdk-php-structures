<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property string|null $imageDigest
 * @property list<string>|null $imageTags
 * @property int|null $imageSizeInBytes
 * @property \Aws\Api\DateTimeResult|null $imagePushedAt
 * @property string|null $imageManifestMediaType
 * @property string|null $artifactMediaType
 */
class ImageDetail extends Shape
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName?: string|null,
     *     imageDigest?: string|null,
     *     imageTags?: list<string>|null,
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
