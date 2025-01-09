<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxWindows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Subdirectory
 * @property string $FsxFilesystemArn
 * @property list<string> $SecurityGroupArns
 * @property list<Shapes\TagListEntry> $Tags
 * @property string $User
 * @property string $Domain
 * @property string $Password
 */
class CreateLocationFsxWindowsRequest extends Request
{
    /**
     * @param array{
     *     Subdirectory?: string,
     *     FsxFilesystemArn: string,
     *     SecurityGroupArns: list<string>,
     *     Tags?: list<Shapes\TagListEntry>,
     *     User: string,
     *     Domain?: string,
     *     Password: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
