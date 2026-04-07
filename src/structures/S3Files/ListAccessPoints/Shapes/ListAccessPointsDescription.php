<?php

namespace Sunaoka\Aws\Structures\S3Files\ListAccessPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessPointArn
 * @property string $accessPointId
 * @property string $fileSystemId
 * @property 'available'|'creating'|'deleting'|'deleted'|'error'|'updating' $status
 * @property string $ownerId
 * @property PosixUser|null $posixUser
 * @property RootDirectory|null $rootDirectory
 * @property string|null $name
 */
class ListAccessPointsDescription extends Shape
{
    /**
     * @param array{
     *     accessPointArn: string,
     *     accessPointId: string,
     *     fileSystemId: string,
     *     status: 'available'|'creating'|'deleting'|'deleted'|'error'|'updating',
     *     ownerId: string,
     *     posixUser?: PosixUser|null,
     *     rootDirectory?: RootDirectory|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
