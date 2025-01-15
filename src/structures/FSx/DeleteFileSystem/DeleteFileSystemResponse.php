<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FileSystemId
 * @property 'AVAILABLE'|'CREATING'|'FAILED'|'DELETING'|'MISCONFIGURED'|'UPDATING'|'MISCONFIGURED_UNAVAILABLE'|null $Lifecycle
 * @property Shapes\DeleteFileSystemWindowsResponse|null $WindowsResponse
 * @property Shapes\DeleteFileSystemLustreResponse|null $LustreResponse
 * @property Shapes\DeleteFileSystemOpenZFSResponse|null $OpenZFSResponse
 */
class DeleteFileSystemResponse extends Response
{
}
