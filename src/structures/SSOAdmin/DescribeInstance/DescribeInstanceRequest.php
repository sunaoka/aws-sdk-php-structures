<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 */
class DescribeInstanceRequest extends Request
{
    /**
     * @param array{InstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
