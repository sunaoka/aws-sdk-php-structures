<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\PutLifecycleEventHookExecutionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property string $lifecycleEventHookExecutionId
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown' $status
 */
class PutLifecycleEventHookExecutionStatusRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     lifecycleEventHookExecutionId?: string,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
