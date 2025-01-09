<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentId
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'PENDING_DEPLOYMENT' $deploymentStatus
 * @property 'CREATE'|'UPDATE'|'DELETE' $deploymentType
 * @property EnvironmentError $failureReason
 * @property bool $isDeploymentComplete
 * @property list<string> $messages
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     deploymentStatus?: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'PENDING_DEPLOYMENT',
     *     deploymentType?: 'CREATE'|'UPDATE'|'DELETE',
     *     failureReason?: EnvironmentError,
     *     isDeploymentComplete?: bool,
     *     messages?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
