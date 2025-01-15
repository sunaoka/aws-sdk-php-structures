<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentManagedActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActionId
 * @property string|null $ActionDescription
 * @property 'InstanceRefresh'|'PlatformUpdate'|'Unknown'|null $ActionType
 * @property 'Scheduled'|'Pending'|'Running'|'Unknown'|null $Status
 * @property \Aws\Api\DateTimeResult|null $WindowStartTime
 */
class ManagedAction extends Shape
{
    /**
     * @param array{
     *     ActionId?: string|null,
     *     ActionDescription?: string|null,
     *     ActionType?: 'InstanceRefresh'|'PlatformUpdate'|'Unknown'|null,
     *     Status?: 'Scheduled'|'Pending'|'Running'|'Unknown'|null,
     *     WindowStartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
