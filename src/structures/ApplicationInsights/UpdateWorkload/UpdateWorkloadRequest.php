<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $ComponentName
 * @property string $WorkloadId
 * @property Shapes\WorkloadConfiguration $WorkloadConfiguration
 */
class UpdateWorkloadRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     ComponentName: string,
     *     WorkloadId?: string,
     *     WorkloadConfiguration: Shapes\WorkloadConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
