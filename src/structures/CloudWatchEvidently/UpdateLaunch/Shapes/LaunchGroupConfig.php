<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $feature
 * @property string $name
 * @property string $variation
 */
class LaunchGroupConfig extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     feature: string,
     *     name: string,
     *     variation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
