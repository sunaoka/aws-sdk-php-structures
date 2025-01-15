<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelBundleTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $BundleId
 * @property 'pending'|'waiting-for-shutdown'|'bundling'|'storing'|'cancelling'|'complete'|'failed'|null $State
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property Storage|null $Storage
 * @property string|null $Progress
 * @property BundleTaskError|null $BundleTaskError
 */
class BundleTask extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     BundleId?: string|null,
     *     State?: 'pending'|'waiting-for-shutdown'|'bundling'|'storing'|'cancelling'|'complete'|'failed'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     Storage?: Storage|null,
     *     Progress?: string|null,
     *     BundleTaskError?: BundleTaskError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
