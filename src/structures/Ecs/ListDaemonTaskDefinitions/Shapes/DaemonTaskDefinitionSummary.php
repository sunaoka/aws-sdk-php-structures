<?php

namespace Sunaoka\Aws\Structures\Ecs\ListDaemonTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $registeredAt
 * @property string|null $registeredBy
 * @property \Aws\Api\DateTimeResult|null $deleteRequestedAt
 * @property 'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETED'|null $status
 */
class DaemonTaskDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     registeredAt?: \Aws\Api\DateTimeResult|null,
     *     registeredBy?: string|null,
     *     deleteRequestedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
