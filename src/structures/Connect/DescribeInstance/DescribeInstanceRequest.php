<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 */
class DescribeInstanceRequest extends Request
{
    /**
     * @param array{InstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
