<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeBackupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 */
class DescribeBackupPolicyRequest extends Request
{
    /**
     * @param array{FileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
