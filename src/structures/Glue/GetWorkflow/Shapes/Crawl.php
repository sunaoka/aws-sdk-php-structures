<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'CANCELLING'|'CANCELLED'|'SUCCEEDED'|'FAILED'|'ERROR' $State
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property string $ErrorMessage
 * @property string $LogGroup
 * @property string $LogStream
 */
class Crawl extends Shape
{
    /**
     * @param array{
     *     State?: 'RUNNING'|'CANCELLING'|'CANCELLED'|'SUCCEEDED'|'FAILED'|'ERROR',
     *     StartedOn?: \Aws\Api\DateTimeResult,
     *     CompletedOn?: \Aws\Api\DateTimeResult,
     *     ErrorMessage?: string,
     *     LogGroup?: string,
     *     LogStream?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
