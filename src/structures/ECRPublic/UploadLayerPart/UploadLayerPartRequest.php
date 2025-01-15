<?php

namespace Sunaoka\Aws\Structures\ECRPublic\UploadLayerPart;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property string $uploadId
 * @property int<0, max> $partFirstByte
 * @property int<0, max> $partLastByte
 * @property string|resource|\Psr\Http\Message\StreamInterface $layerPartBlob
 */
class UploadLayerPartRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     uploadId: string,
     *     partFirstByte: int<0, max>,
     *     partLastByte: int<0, max>,
     *     layerPartBlob: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
