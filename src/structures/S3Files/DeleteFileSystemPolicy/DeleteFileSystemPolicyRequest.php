<?php

namespace Sunaoka\Aws\Structures\S3Files\DeleteFileSystemPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileSystemId
 */
class DeleteFileSystemPolicyRequest extends Request
{
    /**
     * @param array{fileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
