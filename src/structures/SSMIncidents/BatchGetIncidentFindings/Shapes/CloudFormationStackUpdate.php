<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\BatchGetIncidentFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string $stackArn
 * @property \Aws\Api\DateTimeResult $startTime
 */
class CloudFormationStackUpdate extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     stackArn: string,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
