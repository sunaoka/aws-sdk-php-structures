<?php

namespace Sunaoka\Aws\Structures\Ecr\GetDownloadUrlForLayer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $layerDigest
 */
class GetDownloadUrlForLayerRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     layerDigest: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
