<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeResourceGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $resourceGroupArns
 */
class DescribeResourceGroupsRequest extends Request
{
    /**
     * @param array{resourceGroupArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
