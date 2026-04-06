<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientRequestId
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int|null $operationTotalTimeMs
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property int|null $totalTimeMs
 * @property Usage|null $usage
 */
class Metadata extends Shape
{
    /**
     * @param array{
     *     clientRequestId?: string|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     operationTotalTimeMs?: int|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     totalTimeMs?: int|null,
     *     usage?: Usage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
