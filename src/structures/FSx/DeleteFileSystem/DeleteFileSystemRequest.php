<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string $ClientRequestToken
 * @property Shapes\DeleteFileSystemWindowsConfiguration $WindowsConfiguration
 * @property Shapes\DeleteFileSystemLustreConfiguration $LustreConfiguration
 * @property Shapes\DeleteFileSystemOpenZFSConfiguration $OpenZFSConfiguration
 */
class DeleteFileSystemRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     ClientRequestToken?: string,
     *     WindowsConfiguration?: Shapes\DeleteFileSystemWindowsConfiguration,
     *     LustreConfiguration?: Shapes\DeleteFileSystemLustreConfiguration,
     *     OpenZFSConfiguration?: Shapes\DeleteFileSystemOpenZFSConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
