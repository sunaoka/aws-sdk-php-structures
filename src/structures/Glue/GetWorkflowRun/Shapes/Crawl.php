<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'CANCELLING'|'CANCELLED'|'SUCCEEDED'|'FAILED'|'ERROR'|null $State
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property string|null $ErrorMessage
 * @property string|null $LogGroup
 * @property string|null $LogStream
 */
class Crawl extends Shape
{
    /**
     * @param array{
     *     State?: 'RUNNING'|'CANCELLING'|'CANCELLED'|'SUCCEEDED'|'FAILED'|'ERROR'|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     CompletedOn?: \Aws\Api\DateTimeResult|null,
     *     ErrorMessage?: string|null,
     *     LogGroup?: string|null,
     *     LogStream?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
