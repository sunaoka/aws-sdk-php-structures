<?php

namespace Sunaoka\Aws\Structures\Proton\NotifyResourceDeploymentStatusChange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $deploymentId
 * @property list<Shapes\Output>|null $outputs
 * @property string $resourceArn
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $status
 * @property string|null $statusMessage
 */
class NotifyResourceDeploymentStatusChangeRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     outputs?: list<Shapes\Output>|null,
     *     resourceArn: string,
     *     status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
