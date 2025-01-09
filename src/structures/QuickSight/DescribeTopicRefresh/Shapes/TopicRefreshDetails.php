<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicRefresh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RefreshArn
 * @property string $RefreshId
 * @property 'INITIALIZED'|'RUNNING'|'FAILED'|'COMPLETED'|'CANCELLED' $RefreshStatus
 */
class TopicRefreshDetails extends Shape
{
    /**
     * @param array{
     *     RefreshArn?: string,
     *     RefreshId?: string,
     *     RefreshStatus?: 'INITIALIZED'|'RUNNING'|'FAILED'|'COMPLETED'|'CANCELLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
