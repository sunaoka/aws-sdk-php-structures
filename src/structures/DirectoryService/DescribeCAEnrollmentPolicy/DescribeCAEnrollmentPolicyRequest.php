<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeCAEnrollmentPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class DescribeCAEnrollmentPolicyRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
