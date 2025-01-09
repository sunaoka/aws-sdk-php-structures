<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironmentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 */
class DescribeEnvironmentStatusRequest extends Request
{
    /**
     * @param array{environmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
