<?php

namespace Sunaoka\Aws\Structures\S3Files\DeleteFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileSystemId
 * @property bool|null $forceDelete
 */
class DeleteFileSystemRequest extends Request
{
    /**
     * @param array{
     *     fileSystemId: string,
     *     forceDelete?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
