<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $LogicalResourceId
 * @property string $PhysicalResourceId
 */
class DescribeStackResourcesRequest extends Request
{
    /**
     * @param array{
     *     StackName?: string,
     *     LogicalResourceId?: string,
     *     PhysicalResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
