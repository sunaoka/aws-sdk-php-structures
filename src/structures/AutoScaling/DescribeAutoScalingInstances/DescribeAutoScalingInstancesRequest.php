<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceIds
 * @property bool|null $IncludeManagedResources
 * @property int|null $MaxRecords
 * @property string|null $NextToken
 */
class DescribeAutoScalingInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     IncludeManagedResources?: bool|null,
     *     MaxRecords?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
