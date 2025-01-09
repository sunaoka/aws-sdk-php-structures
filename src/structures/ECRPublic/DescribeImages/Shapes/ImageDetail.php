<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $imageDigest
 * @property list<string> $imageTags
 * @property int $imageSizeInBytes
 * @property \Aws\Api\DateTimeResult $imagePushedAt
 * @property string $imageManifestMediaType
 * @property string $artifactMediaType
 */
class ImageDetail extends Shape
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName?: string,
     *     imageDigest?: string,
     *     imageTags?: list<string>,
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
