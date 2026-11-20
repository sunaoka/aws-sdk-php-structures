<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $updateId
 * @property 'GATEWAY_CONFIG_UPDATE'|'LINK_CONFIG_UPDATE'|'LINK_FLOW_UPDATE'|'ROUTING_RULE_UPDATE' $type
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED' $status
 * @property UpdateTarget $target
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property UpdateParameters|null $parameters
 * @property list<ErrorDetail>|null $errorDetails
 */
class Update extends Shape
{
    /**
     * @param array{
     *     updateId: string,
     *     type: 'GATEWAY_CONFIG_UPDATE'|'LINK_CONFIG_UPDATE'|'LINK_FLOW_UPDATE'|'ROUTING_RULE_UPDATE',
     *     status: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED',
     *     target: UpdateTarget,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     parameters?: UpdateParameters|null,
     *     errorDetails?: list<ErrorDetail>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
