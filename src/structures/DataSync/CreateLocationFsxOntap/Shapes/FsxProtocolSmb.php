<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOntap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property SmbMountOptions|null $MountOptions
 * @property string $Password
 * @property string $User
 */
class FsxProtocolSmb extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     MountOptions?: SmbMountOptions|null,
     *     Password: string,
     *     User: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
