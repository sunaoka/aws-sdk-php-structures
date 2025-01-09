<?php

namespace Sunaoka\Aws\Structures\Ecr\CreateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property list<Shapes\Tag> $tags
 * @property 'MUTABLE'|'IMMUTABLE' $imageTagMutability
 * @property Shapes\ImageScanningConfiguration $imageScanningConfiguration
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 */
class CreateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     tags?: list<Shapes\Tag>,
     *     imageTagMutability?: 'MUTABLE'|'IMMUTABLE',
     *     imageScanningConfiguration?: Shapes\ImageScanningConfiguration,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
