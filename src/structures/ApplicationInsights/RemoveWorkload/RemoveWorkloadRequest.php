<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\RemoveWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $ComponentName
 * @property string $WorkloadId
 */
class RemoveWorkloadRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     ComponentName: string,
     *     WorkloadId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
