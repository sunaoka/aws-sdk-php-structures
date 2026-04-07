<?php

namespace Sunaoka\Aws\Structures\S3Files\CreateAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 * @property string $fileSystemId
 * @property Shapes\PosixUser|null $posixUser
 * @property Shapes\RootDirectory|null $rootDirectory
 */
class CreateAccessPointRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     fileSystemId: string,
     *     posixUser?: Shapes\PosixUser|null,
     *     rootDirectory?: Shapes\RootDirectory|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
