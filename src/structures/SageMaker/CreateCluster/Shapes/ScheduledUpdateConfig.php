<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property DeploymentConfiguration|null $DeploymentConfig
 */
class ScheduledUpdateConfig extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     DeploymentConfig?: DeploymentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
