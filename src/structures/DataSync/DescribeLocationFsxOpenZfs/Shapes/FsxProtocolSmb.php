<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxOpenZfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property SmbMountOptions|null $MountOptions
 * @property string|null $Password
 * @property string $User
 * @property ManagedSecretConfig|null $ManagedSecretConfig
 * @property CmkSecretConfig|null $CmkSecretConfig
 * @property CustomSecretConfig|null $CustomSecretConfig
 */
class FsxProtocolSmb extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     MountOptions?: SmbMountOptions|null,
     *     Password?: string|null,
     *     User: string,
     *     ManagedSecretConfig?: ManagedSecretConfig|null,
     *     CmkSecretConfig?: CmkSecretConfig|null,
     *     CustomSecretConfig?: CustomSecretConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
