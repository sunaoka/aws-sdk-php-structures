<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileSystemId
 * @property string|null $rootDirectory
 * @property 'ENABLED'|'DISABLED'|null $transitEncryption
 * @property int|null $transitEncryptionPort
 * @property EFSAuthorizationConfig|null $authorizationConfig
 */
class EFSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     fileSystemId: string,
     *     rootDirectory?: string|null,
     *     transitEncryption?: 'ENABLED'|'DISABLED'|null,
     *     transitEncryptionPort?: int|null,
     *     authorizationConfig?: EFSAuthorizationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
