<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deploymentId
 * @property 'CREATE'|'UPDATE'|'DELETE'|null $deploymentType
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'PENDING_DEPLOYMENT'|null $deploymentStatus
 * @property EnvironmentError|null $failureReason
 * @property list<string>|null $messages
 * @property bool|null $isDeploymentComplete
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     deploymentType?: 'CREATE'|'UPDATE'|'DELETE'|null,
     *     deploymentStatus?: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'PENDING_DEPLOYMENT'|null,
     *     failureReason?: EnvironmentError|null,
     *     messages?: list<string>|null,
     *     isDeploymentComplete?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
