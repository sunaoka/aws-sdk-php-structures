<?php

namespace Sunaoka\Aws\Structures\Ecr\CreateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryArn
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property string|null $repositoryUri
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'MUTABLE'|'IMMUTABLE'|null $imageTagMutability
 * @property ImageScanningConfiguration|null $imageScanningConfiguration
 * @property EncryptionConfiguration|null $encryptionConfiguration
 */
class Repository extends Shape
{
    /**
     * @param array{
     *     repositoryArn?: string|null,
     *     registryId?: string|null,
     *     repositoryName?: string|null,
     *     repositoryUri?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     imageTagMutability?: 'MUTABLE'|'IMMUTABLE'|null,
     *     imageScanningConfiguration?: ImageScanningConfiguration|null,
     *     encryptionConfiguration?: EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
