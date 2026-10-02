<?php

namespace Sunaoka\Aws\Structures\Health\DescribeServiceLifecycle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $service
 * @property string|null $version
 * @property string|null $title
 * @property string|null $recommendedVersion
 * @property list<LifecycleEvent>|null $lifecycleEvents
 */
class ServiceLifecycle extends Shape
{
    /**
     * @param array{
     *     service?: string|null,
     *     version?: string|null,
     *     title?: string|null,
     *     recommendedVersion?: string|null,
     *     lifecycleEvents?: list<LifecycleEvent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
