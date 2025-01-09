<?php

namespace Sunaoka\Aws\Structures\Efs\DeleteFileSystemPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 */
class DeleteFileSystemPolicyRequest extends Request
{
    /**
     * @param array{FileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
