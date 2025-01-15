<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeNotificationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AutoScalingGroupNames
 * @property string|null $NextToken
 * @property int|null $MaxRecords
 */
class DescribeNotificationConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupNames?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
