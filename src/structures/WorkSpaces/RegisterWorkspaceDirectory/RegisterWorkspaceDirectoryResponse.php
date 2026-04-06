<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RegisterWorkspaceDirectory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DirectoryId
 * @property 'REGISTERING'|'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ERROR'|null $State
 */
class RegisterWorkspaceDirectoryResponse extends Response
{
}
