<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeBundleTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $BundleId
 * @property 'pending'|'waiting-for-shutdown'|'bundling'|'storing'|'cancelling'|'complete'|'failed' $State
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property Storage $Storage
 * @property string $Progress
 * @property BundleTaskError $BundleTaskError
 */
class BundleTask extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     BundleId?: string,
     *     State?: 'pending'|'waiting-for-shutdown'|'bundling'|'storing'|'cancelling'|'complete'|'failed',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     UpdateTime?: \Aws\Api\DateTimeResult,
     *     Storage?: Storage,
     *     Progress?: string,
     *     BundleTaskError?: BundleTaskError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
