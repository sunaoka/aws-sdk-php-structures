<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $timeoutInSeconds
 * @property 'NOTIFY_COMPONENTS'|'SKIP_NOTIFY_COMPONENTS'|null $action
 */
class DeploymentComponentUpdatePolicy extends Shape
{
    /**
     * @param array{
     *     timeoutInSeconds?: int|null,
     *     action?: 'NOTIFY_COMPONENTS'|'SKIP_NOTIFY_COMPONENTS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
