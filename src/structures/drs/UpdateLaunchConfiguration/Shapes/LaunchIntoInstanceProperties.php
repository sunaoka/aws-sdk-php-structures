<?php

namespace Sunaoka\Aws\Structures\drs\UpdateLaunchConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $launchIntoEC2InstanceID
 */
class LaunchIntoInstanceProperties extends Shape
{
    /**
     * @param array{launchIntoEC2InstanceID?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
