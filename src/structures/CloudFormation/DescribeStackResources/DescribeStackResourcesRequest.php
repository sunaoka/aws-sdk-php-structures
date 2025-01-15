<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackName
 * @property string|null $LogicalResourceId
 * @property string|null $PhysicalResourceId
 */
class DescribeStackResourcesRequest extends Request
{
    /**
     * @param array{
     *     StackName?: string|null,
     *     LogicalResourceId?: string|null,
     *     PhysicalResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
