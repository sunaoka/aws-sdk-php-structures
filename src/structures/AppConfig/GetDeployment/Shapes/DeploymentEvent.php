<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PERCENTAGE_UPDATED'|'ROLLBACK_STARTED'|'ROLLBACK_COMPLETED'|'BAKE_TIME_STARTED'|'DEPLOYMENT_STARTED'|'DEPLOYMENT_COMPLETED'|'REVERT_COMPLETED'|null $EventType
 * @property 'USER'|'APPCONFIG'|'CLOUDWATCH_ALARM'|'INTERNAL_ERROR'|null $TriggeredBy
 * @property string|null $Description
 * @property list<ActionInvocation>|null $ActionInvocations
 * @property \Aws\Api\DateTimeResult|null $OccurredAt
 */
class DeploymentEvent extends Shape
{
    /**
     * @param array{
     *     EventType?: 'PERCENTAGE_UPDATED'|'ROLLBACK_STARTED'|'ROLLBACK_COMPLETED'|'BAKE_TIME_STARTED'|'DEPLOYMENT_STARTED'|'DEPLOYMENT_COMPLETED'|'REVERT_COMPLETED'|null,
     *     TriggeredBy?: 'USER'|'APPCONFIG'|'CLOUDWATCH_ALARM'|'INTERNAL_ERROR'|null,
     *     Description?: string|null,
     *     ActionInvocations?: list<ActionInvocation>|null,
     *     OccurredAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
