<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileInitialization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $runtimeRoleArn
 * @property string|null $script
 * @property string|null $secureInitializationRoleArn
 * @property string|null $studioComponentId
 * @property string|null $studioComponentName
 */
class LaunchProfileInitializationScript extends Shape
{
    /**
     * @param array{
     *     runtimeRoleArn?: string|null,
     *     script?: string|null,
     *     secureInitializationRoleArn?: string|null,
     *     studioComponentId?: string|null,
     *     studioComponentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
