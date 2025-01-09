<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceAssociationsStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class DescribeInstanceAssociationsStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
