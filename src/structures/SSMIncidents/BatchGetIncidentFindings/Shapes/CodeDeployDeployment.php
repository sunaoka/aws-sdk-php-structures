<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\BatchGetIncidentFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentGroupArn
 * @property string $deploymentId
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property \Aws\Api\DateTimeResult $startTime
 */
class CodeDeployDeployment extends Shape
{
    /**
     * @param array{
     *     deploymentGroupArn: string,
     *     deploymentId: string,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
