<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryArn
 * @property string $registryId
 * @property string $repositoryName
 * @property string $repositoryUri
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'MUTABLE'|'IMMUTABLE' $imageTagMutability
 * @property ImageScanningConfiguration $imageScanningConfiguration
 * @property EncryptionConfiguration $encryptionConfiguration
 */
class Repository extends Shape
{
    /**
     * @param array{
     *     repositoryArn?: string,
     *     registryId?: string,
     *     repositoryName?: string,
     *     repositoryUri?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     imageTagMutability?: 'MUTABLE'|'IMMUTABLE',
     *     imageScanningConfiguration?: ImageScanningConfiguration,
     *     encryptionConfiguration?: EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
