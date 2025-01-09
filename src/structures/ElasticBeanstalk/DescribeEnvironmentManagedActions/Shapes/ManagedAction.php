<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentManagedActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionId
 * @property string $ActionDescription
 * @property 'InstanceRefresh'|'PlatformUpdate'|'Unknown' $ActionType
 * @property 'Scheduled'|'Pending'|'Running'|'Unknown' $Status
 * @property \Aws\Api\DateTimeResult $WindowStartTime
 */
class ManagedAction extends Shape
{
    /**
     * @param array{
     *     ActionId?: string,
     *     ActionDescription?: string,
     *     ActionType?: 'InstanceRefresh'|'PlatformUpdate'|'Unknown',
     *     Status?: 'Scheduled'|'Pending'|'Running'|'Unknown',
     *     WindowStartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
