<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timeoutInSeconds
 * @property 'NOTIFY_COMPONENTS'|'SKIP_NOTIFY_COMPONENTS' $action
 */
class DeploymentComponentUpdatePolicy extends Shape
{
    /**
     * @param array{
     *     timeoutInSeconds?: int,
     *     action?: 'NOTIFY_COMPONENTS'|'SKIP_NOTIFY_COMPONENTS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
