<?php

namespace Sunaoka\Aws\Structures\drs\GetLaunchConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $launchIntoEC2InstanceID
 */
class LaunchIntoInstanceProperties extends Shape
{
    /**
     * @param array{launchIntoEC2InstanceID?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
