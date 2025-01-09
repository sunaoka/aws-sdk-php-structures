<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property int $MaxRecords
 * @property string $NextToken
 */
class DescribeAutoScalingInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>,
     *     MaxRecords?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
