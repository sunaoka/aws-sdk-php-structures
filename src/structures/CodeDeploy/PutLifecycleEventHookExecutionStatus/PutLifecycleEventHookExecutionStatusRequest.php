<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\PutLifecycleEventHookExecutionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $deploymentId
 * @property string|null $lifecycleEventHookExecutionId
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|null $status
 */
class PutLifecycleEventHookExecutionStatusRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     lifecycleEventHookExecutionId?: string|null,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
