<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int|null $totalTimeMs
 * @property int|null $operationTotalTimeMs
 * @property string|null $clientRequestId
 * @property Usage|null $usage
 */
class Metadata extends Shape
{
    /**
     * @param array{
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     totalTimeMs?: int|null,
     *     operationTotalTimeMs?: int|null,
     *     clientRequestId?: string|null,
     *     usage?: Usage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
