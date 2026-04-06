<?php

namespace Sunaoka\Aws\Structures\Ec2\BundleInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BundleId
 * @property BundleTaskError|null $BundleTaskError
 * @property string|null $InstanceId
 * @property string|null $Progress
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'pending'|'waiting-for-shutdown'|'bundling'|'storing'|'cancelling'|'complete'|'failed'|null $State
 * @property Storage|null $Storage
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 */
class BundleTask extends Shape
{
    /**
     * @param array{
     *     BundleId?: string|null,
     *     BundleTaskError?: BundleTaskError|null,
     *     InstanceId?: string|null,
     *     Progress?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'pending'|'waiting-for-shutdown'|'bundling'|'storing'|'cancelling'|'complete'|'failed'|null,
     *     Storage?: Storage|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
