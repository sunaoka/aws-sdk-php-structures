<?php

namespace Sunaoka\Aws\Structures\Efs\DeleteFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 */
class DeleteFileSystemRequest extends Request
{
    /**
     * @param array{FileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
