<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeNotificationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AutoScalingGroupNames
 * @property string $NextToken
 * @property int $MaxRecords
 */
class DescribeNotificationConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupNames?: list<string>,
     *     NextToken?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
