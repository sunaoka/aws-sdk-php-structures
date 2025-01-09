<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $LogicalOperator
 * @property string $JobName
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|'ERROR'|'WAITING'|'EXPIRED' $State
 * @property string $CrawlerName
 * @property 'RUNNING'|'CANCELLING'|'CANCELLED'|'SUCCEEDED'|'FAILED'|'ERROR' $CrawlState
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     LogicalOperator?: 'EQUALS',
     *     JobName?: string,
     *     State?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|'ERROR'|'WAITING'|'EXPIRED',
     *     CrawlerName?: string,
     *     CrawlState?: 'RUNNING'|'CANCELLING'|'CANCELLED'|'SUCCEEDED'|'FAILED'|'ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
