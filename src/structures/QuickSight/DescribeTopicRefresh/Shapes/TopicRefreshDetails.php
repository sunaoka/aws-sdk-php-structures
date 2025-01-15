<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicRefresh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RefreshArn
 * @property string|null $RefreshId
 * @property 'INITIALIZED'|'RUNNING'|'FAILED'|'COMPLETED'|'CANCELLED'|null $RefreshStatus
 */
class TopicRefreshDetails extends Shape
{
    /**
     * @param array{
     *     RefreshArn?: string|null,
     *     RefreshId?: string|null,
     *     RefreshStatus?: 'INITIALIZED'|'RUNNING'|'FAILED'|'COMPLETED'|'CANCELLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
