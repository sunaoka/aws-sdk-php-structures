<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $ComponentName
 * @property string $WorkloadId
 * @property string|null $AccountId
 */
class DescribeWorkloadRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     ComponentName: string,
     *     WorkloadId: string,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
