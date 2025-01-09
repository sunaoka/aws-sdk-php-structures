<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RegisterWorkspaceDirectory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DirectoryId
 * @property 'REGISTERING'|'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ERROR' $State
 */
class RegisterWorkspaceDirectoryResponse extends Response
{
}
