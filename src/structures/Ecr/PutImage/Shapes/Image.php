<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property ImageIdentifier $imageId
 * @property string $imageManifest
 * @property string $imageManifestMediaType
 */
class Image extends Shape
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName?: string,
     *     imageId?: ImageIdentifier,
     *     imageManifest?: string,
     *     imageManifestMediaType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
