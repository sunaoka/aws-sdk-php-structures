<?php

namespace Sunaoka\Aws\Structures\ECRPublic\PutImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property ImageIdentifier|null $imageId
 * @property string|null $imageManifest
 * @property string|null $imageManifestMediaType
 */
class Image extends Shape
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName?: string|null,
     *     imageId?: ImageIdentifier|null,
     *     imageManifest?: string|null,
     *     imageManifestMediaType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
