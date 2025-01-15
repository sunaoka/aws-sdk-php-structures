<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|null $LogicalOperator
 * @property string|null $JobName
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|'ERROR'|'WAITING'|'EXPIRED'|null $State
 * @property string|null $CrawlerName
 * @property 'RUNNING'|'CANCELLING'|'CANCELLED'|'SUCCEEDED'|'FAILED'|'ERROR'|null $CrawlState
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     LogicalOperator?: 'EQUALS'|null,
     *     JobName?: string|null,
     *     State?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|'ERROR'|'WAITING'|'EXPIRED'|null,
     *     CrawlerName?: string|null,
     *     CrawlState?: 'RUNNING'|'CANCELLING'|'CANCELLED'|'SUCCEEDED'|'FAILED'|'ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
