<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\UpdateDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $triggerName
 * @property string $triggerTargetArn
 * @property list<'DeploymentStart'|'DeploymentSuccess'|'DeploymentFailure'|'DeploymentStop'|'DeploymentRollback'|'DeploymentReady'|'InstanceStart'|'InstanceSuccess'|'InstanceFailure'|'InstanceReady'> $triggerEvents
 */
class TriggerConfig extends Shape
{
    /**
     * @param array{
     *     triggerName?: string,
     *     triggerTargetArn?: string,
     *     triggerEvents?: list<'DeploymentStart'|'DeploymentSuccess'|'DeploymentFailure'|'DeploymentStop'|'DeploymentRollback'|'DeploymentReady'|'InstanceStart'|'InstanceSuccess'|'InstanceFailure'|'InstanceReady'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
