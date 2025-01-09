<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOpenZfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property SmbMountOptions $MountOptions
 * @property string $Password
 * @property string $User
 */
class FsxProtocolSmb extends Shape
{
    /**
     * @param array{
     *     Domain?: string,
     *     MountOptions?: SmbMountOptions,
     *     Password: string,
     *     User: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
