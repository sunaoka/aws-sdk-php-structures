<?php

namespace Sunaoka\Aws\Structures\Efs\CreateAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 * @property string $FileSystemId
 * @property Shapes\PosixUser|null $PosixUser
 * @property Shapes\RootDirectory|null $RootDirectory
 */
class CreateAccessPointRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     FileSystemId: string,
     *     PosixUser?: Shapes\PosixUser|null,
     *     RootDirectory?: Shapes\RootDirectory|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
