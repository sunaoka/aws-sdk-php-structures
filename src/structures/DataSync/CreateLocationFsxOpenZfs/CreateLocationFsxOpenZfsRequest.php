<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOpenZfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FsxFilesystemArn
 * @property Shapes\FsxProtocol $Protocol
 * @property list<string> $SecurityGroupArns
 * @property string|null $Subdirectory
 * @property list<Shapes\TagListEntry>|null $Tags
 */
class CreateLocationFsxOpenZfsRequest extends Request
{
    /**
     * @param array{
     *     FsxFilesystemArn: string,
     *     Protocol: Shapes\FsxProtocol,
     *     SecurityGroupArns: list<string>,
     *     Subdirectory?: string|null,
     *     Tags?: list<Shapes\TagListEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
