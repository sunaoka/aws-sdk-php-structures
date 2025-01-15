<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxOntap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property SmbMountOptions|null $MountOptions
 * @property string|null $Password
 * @property string|null $User
 */
class FsxUpdateProtocolSmb extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     MountOptions?: SmbMountOptions|null,
     *     Password?: string|null,
     *     User?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
