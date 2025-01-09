<?php

namespace Sunaoka\Aws\Structures\ECRPublic\PutImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $imageManifest
 * @property string $imageManifestMediaType
 * @property string $imageTag
 * @property string $imageDigest
 */
class PutImageRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     imageManifest: string,
     *     imageManifestMediaType?: string,
     *     imageTag?: string,
     *     imageDigest?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
