<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceRole
 * @property ApplicationVersionLifecycleConfig|null $VersionLifecycleConfig
 */
class ApplicationResourceLifecycleConfig extends Shape
{
    /**
     * @param array{
     *     ServiceRole?: string|null,
     *     VersionLifecycleConfig?: ApplicationVersionLifecycleConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
