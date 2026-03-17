<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntimeCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $exitCode
 * @property 'COMPLETED'|'TIMED_OUT' $status
 */
class ContentStopEvent extends Shape
{
    /**
     * @param array{
     *     exitCode: int,
     *     status: 'COMPLETED'|'TIMED_OUT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
