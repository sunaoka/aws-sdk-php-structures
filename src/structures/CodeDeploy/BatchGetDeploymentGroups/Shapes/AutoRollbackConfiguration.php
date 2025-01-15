<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property list<'DEPLOYMENT_FAILURE'|'DEPLOYMENT_STOP_ON_ALARM'|'DEPLOYMENT_STOP_ON_REQUEST'>|null $events
 */
class AutoRollbackConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     events?: list<'DEPLOYMENT_FAILURE'|'DEPLOYMENT_STOP_ON_ALARM'|'DEPLOYMENT_STOP_ON_REQUEST'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
