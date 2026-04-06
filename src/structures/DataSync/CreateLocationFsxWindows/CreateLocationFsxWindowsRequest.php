<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxWindows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Subdirectory
 * @property string $FsxFilesystemArn
 * @property list<string> $SecurityGroupArns
 * @property list<Shapes\TagListEntry>|null $Tags
 * @property string $User
 * @property string|null $Domain
 * @property string $Password
 */
class CreateLocationFsxWindowsRequest extends Request
{
    /**
     * @param array{
     *     Subdirectory?: string|null,
     *     FsxFilesystemArn: string,
     *     SecurityGroupArns: list<string>,
     *     Tags?: list<Shapes\TagListEntry>|null,
     *     User: string,
     *     Domain?: string|null,
     *     Password: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
