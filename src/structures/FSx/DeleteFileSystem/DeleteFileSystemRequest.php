<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string|null $ClientRequestToken
 * @property Shapes\DeleteFileSystemWindowsConfiguration|null $WindowsConfiguration
 * @property Shapes\DeleteFileSystemLustreConfiguration|null $LustreConfiguration
 * @property Shapes\DeleteFileSystemOpenZFSConfiguration|null $OpenZFSConfiguration
 */
class DeleteFileSystemRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     ClientRequestToken?: string|null,
     *     WindowsConfiguration?: Shapes\DeleteFileSystemWindowsConfiguration|null,
     *     LustreConfiguration?: Shapes\DeleteFileSystemLustreConfiguration|null,
     *     OpenZFSConfiguration?: Shapes\DeleteFileSystemOpenZFSConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
