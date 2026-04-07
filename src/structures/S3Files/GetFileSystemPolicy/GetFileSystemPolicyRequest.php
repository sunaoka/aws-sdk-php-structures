<?php

namespace Sunaoka\Aws\Structures\S3Files\GetFileSystemPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileSystemId
 */
class GetFileSystemPolicyRequest extends Request
{
    /**
     * @param array{fileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
