<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deploymentId
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'PENDING_DEPLOYMENT'|null $deploymentStatus
 * @property 'CREATE'|'UPDATE'|'DELETE'|null $deploymentType
 * @property EnvironmentError|null $failureReason
 * @property bool|null $isDeploymentComplete
 * @property list<string>|null $messages
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     deploymentStatus?: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'PENDING_DEPLOYMENT'|null,
     *     deploymentType?: 'CREATE'|'UPDATE'|'DELETE'|null,
     *     failureReason?: EnvironmentError|null,
     *     isDeploymentComplete?: bool|null,
     *     messages?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
