<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileSystemArn
 * @property string|null $rootDirectory
 * @property int|null $transitEncryptionPort
 * @property string|null $accessPointArn
 */
class S3FilesVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     fileSystemArn: string,
     *     rootDirectory?: string|null,
     *     transitEncryptionPort?: int|null,
     *     accessPointArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
