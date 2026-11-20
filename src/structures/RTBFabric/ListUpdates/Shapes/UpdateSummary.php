<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $updateId
 * @property 'GATEWAY_CONFIG_UPDATE'|'LINK_CONFIG_UPDATE'|'LINK_FLOW_UPDATE'|'ROUTING_RULE_UPDATE' $type
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class UpdateSummary extends Shape
{
    /**
     * @param array{
     *     updateId: string,
     *     type: 'GATEWAY_CONFIG_UPDATE'|'LINK_CONFIG_UPDATE'|'LINK_FLOW_UPDATE'|'ROUTING_RULE_UPDATE',
     *     status: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED',
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
