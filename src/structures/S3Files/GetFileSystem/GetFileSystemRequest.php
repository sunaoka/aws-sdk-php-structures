<?php

namespace Sunaoka\Aws\Structures\S3Files\GetFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileSystemId
 */
class GetFileSystemRequest extends Request
{
    /**
     * @param array{fileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
