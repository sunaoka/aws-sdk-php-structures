<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileSystemId
 * @property string $rootDirectory
 * @property 'ENABLED'|'DISABLED' $transitEncryption
 * @property int $transitEncryptionPort
 * @property EFSAuthorizationConfig $authorizationConfig
 */
class EFSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     fileSystemId: string,
     *     rootDirectory?: string,
     *     transitEncryption?: 'ENABLED'|'DISABLED',
     *     transitEncryptionPort?: int,
     *     authorizationConfig?: EFSAuthorizationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
