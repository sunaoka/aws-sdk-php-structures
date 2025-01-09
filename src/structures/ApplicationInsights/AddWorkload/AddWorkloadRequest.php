<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\AddWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $ComponentName
 * @property Shapes\WorkloadConfiguration $WorkloadConfiguration
 */
class AddWorkloadRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     ComponentName: string,
     *     WorkloadConfiguration: Shapes\WorkloadConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
