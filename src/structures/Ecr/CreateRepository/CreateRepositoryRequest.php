<?php

namespace Sunaoka\Aws\Structures\Ecr\CreateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property list<Shapes\Tag>|null $tags
 * @property 'MUTABLE'|'IMMUTABLE'|null $imageTagMutability
 * @property Shapes\ImageScanningConfiguration|null $imageScanningConfiguration
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class CreateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     tags?: list<Shapes\Tag>|null,
     *     imageTagMutability?: 'MUTABLE'|'IMMUTABLE'|null,
     *     imageScanningConfiguration?: Shapes\ImageScanningConfiguration|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
