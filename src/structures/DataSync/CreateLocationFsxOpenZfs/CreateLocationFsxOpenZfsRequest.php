<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOpenZfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FsxFilesystemArn
 * @property Shapes\FsxProtocol $Protocol
 * @property list<string> $SecurityGroupArns
 * @property string $Subdirectory
 * @property list<Shapes\TagListEntry> $Tags
 */
class CreateLocationFsxOpenZfsRequest extends Request
{
    /**
     * @param array{
     *     FsxFilesystemArn: string,
     *     Protocol: Shapes\FsxProtocol,
     *     SecurityGroupArns: list<string>,
     *     Subdirectory?: string,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
