<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property string $imageManifest
 * @property string|null $imageManifestMediaType
 * @property string|null $imageTag
 * @property string|null $imageDigest
 */
class PutImageRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     imageManifest: string,
     *     imageManifestMediaType?: string|null,
     *     imageTag?: string|null,
     *     imageDigest?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
