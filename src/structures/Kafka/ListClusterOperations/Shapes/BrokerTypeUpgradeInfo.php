<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'MANUAL'|null $TopicReassignmentMode
 * @property string|null $TopicReassignmentOperationArn
 */
class BrokerTypeUpgradeInfo extends Shape
{
    /**
     * @param array{
     *     TopicReassignmentMode?: 'AUTO'|'MANUAL'|null,
     *     TopicReassignmentOperationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
