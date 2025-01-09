<?php

namespace Sunaoka\Aws\Structures\Proton\NotifyResourceDeploymentStatusChange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property list<Shapes\Output> $outputs
 * @property string $resourceArn
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $status
 * @property string $statusMessage
 */
class NotifyResourceDeploymentStatusChangeRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     outputs?: list<Shapes\Output>,
     *     resourceArn: string,
     *     status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED',
     *     statusMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
