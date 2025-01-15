<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceAssociationsStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeInstanceAssociationsStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
