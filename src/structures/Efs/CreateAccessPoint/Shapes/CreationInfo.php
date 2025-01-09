<?php

namespace Sunaoka\Aws\Structures\Efs\CreateAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $OwnerUid
 * @property int $OwnerGid
 * @property string $Permissions
 */
class CreationInfo extends Shape
{
    /**
     * @param array{
     *     OwnerUid: int,
     *     OwnerGid: int,
     *     Permissions: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
