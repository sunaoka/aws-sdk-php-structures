<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FileSystemId
 * @property 'AVAILABLE'|'CREATING'|'FAILED'|'DELETING'|'MISCONFIGURED'|'UPDATING'|'MISCONFIGURED_UNAVAILABLE' $Lifecycle
 * @property Shapes\DeleteFileSystemWindowsResponse $WindowsResponse
 * @property Shapes\DeleteFileSystemLustreResponse $LustreResponse
 * @property Shapes\DeleteFileSystemOpenZFSResponse $OpenZFSResponse
 */
class DeleteFileSystemResponse extends Response
{
}
