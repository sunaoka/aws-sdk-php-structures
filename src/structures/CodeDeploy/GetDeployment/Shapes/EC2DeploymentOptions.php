<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Terminate'|'AZRebalance'|'InstanceRefresh'|'ScheduledActions'>|null $autoScalingGroupProcessesToSuspend
 */
class EC2DeploymentOptions extends Shape
{
    /**
     * @param array{autoScalingGroupProcessesToSuspend?: list<'Terminate'|'AZRebalance'|'InstanceRefresh'|'ScheduledActions'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
