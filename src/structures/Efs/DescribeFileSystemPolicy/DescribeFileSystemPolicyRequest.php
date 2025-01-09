<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeFileSystemPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 */
class DescribeFileSystemPolicyRequest extends Request
{
    /**
     * @param array{FileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
