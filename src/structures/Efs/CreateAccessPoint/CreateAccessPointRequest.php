<?php

namespace Sunaoka\Aws\Structures\Efs\CreateAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 * @property string $FileSystemId
 * @property Shapes\PosixUser $PosixUser
 * @property Shapes\RootDirectory $RootDirectory
 */
class CreateAccessPointRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>,
     *     FileSystemId: string,
     *     PosixUser?: Shapes\PosixUser,
     *     RootDirectory?: Shapes\RootDirectory
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
