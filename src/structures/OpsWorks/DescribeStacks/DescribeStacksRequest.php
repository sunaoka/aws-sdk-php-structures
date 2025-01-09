<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $StackIds
 */
class DescribeStacksRequest extends Request
{
    /**
     * @param array{StackIds?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
