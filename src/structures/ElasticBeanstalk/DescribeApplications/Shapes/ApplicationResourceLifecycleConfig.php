<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceRole
 * @property ApplicationVersionLifecycleConfig $VersionLifecycleConfig
 */
class ApplicationResourceLifecycleConfig extends Shape
{
    /**
     * @param array{
     *     ServiceRole?: string,
     *     VersionLifecycleConfig?: ApplicationVersionLifecycleConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
