<?php

namespace Sunaoka\Aws\Structures\ECRPublic\UploadLayerPart;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $uploadId
 * @property int $partFirstByte
 * @property int $partLastByte
 * @property string $layerPartBlob
 */
class UploadLayerPartRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     uploadId: string,
     *     partFirstByte: int,
     *     partLastByte: int,
     *     layerPartBlob: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
