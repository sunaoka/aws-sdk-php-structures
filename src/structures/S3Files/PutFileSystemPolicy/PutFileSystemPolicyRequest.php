<?php

namespace Sunaoka\Aws\Structures\S3Files\PutFileSystemPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileSystemId
 * @property string $policy
 */
class PutFileSystemPolicyRequest extends Request
{
    /**
     * @param array{
     *     fileSystemId: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
