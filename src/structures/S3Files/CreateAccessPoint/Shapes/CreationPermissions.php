<?php

namespace Sunaoka\Aws\Structures\S3Files\CreateAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $ownerUid
 * @property int<0, 4294967295> $ownerGid
 * @property string $permissions
 */
class CreationPermissions extends Shape
{
    /**
     * @param array{
     *     ownerUid: int<0, 4294967295>,
     *     ownerGid: int<0, 4294967295>,
     *     permissions: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
