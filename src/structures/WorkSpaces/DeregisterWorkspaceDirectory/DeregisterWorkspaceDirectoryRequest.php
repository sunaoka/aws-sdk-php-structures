<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeregisterWorkspaceDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class DeregisterWorkspaceDirectoryRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
