<?php

namespace Sunaoka\Aws\Structures\ECRPublic\CompleteLayerUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $uploadId
 * @property list<string> $layerDigests
 */
class CompleteLayerUploadRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     uploadId: string,
     *     layerDigests: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
