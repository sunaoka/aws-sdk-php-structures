<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentId
 * @property 'Created'|'Queued'|'InProgress'|'Baking'|'Succeeded'|'Failed'|'Stopped'|'Ready' $status
 * @property \Aws\Api\DateTimeResult $endTime
 * @property \Aws\Api\DateTimeResult $createTime
 */
class LastDeploymentInfo extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     status?: 'Created'|'Queued'|'InProgress'|'Baking'|'Succeeded'|'Failed'|'Stopped'|'Ready',
     *     endTime?: \Aws\Api\DateTimeResult,
     *     createTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
