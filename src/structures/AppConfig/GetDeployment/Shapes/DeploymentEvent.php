<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PERCENTAGE_UPDATED'|'ROLLBACK_STARTED'|'ROLLBACK_COMPLETED'|'BAKE_TIME_STARTED'|'DEPLOYMENT_STARTED'|'DEPLOYMENT_COMPLETED'|'REVERT_COMPLETED' $EventType
 * @property 'USER'|'APPCONFIG'|'CLOUDWATCH_ALARM'|'INTERNAL_ERROR' $TriggeredBy
 * @property string $Description
 * @property list<ActionInvocation> $ActionInvocations
 * @property \Aws\Api\DateTimeResult $OccurredAt
 */
class DeploymentEvent extends Shape
{
    /**
     * @param array{
     *     EventType?: 'PERCENTAGE_UPDATED'|'ROLLBACK_STARTED'|'ROLLBACK_COMPLETED'|'BAKE_TIME_STARTED'|'DEPLOYMENT_STARTED'|'DEPLOYMENT_COMPLETED'|'REVERT_COMPLETED',
     *     TriggeredBy?: 'USER'|'APPCONFIG'|'CLOUDWATCH_ALARM'|'INTERNAL_ERROR',
     *     Description?: string,
     *     ActionInvocations?: list<ActionInvocation>,
     *     OccurredAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
