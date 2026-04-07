<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateCapacityManagerMonitoredTagKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TagKey
 * @property 'activating'|'activated'|'deactivating'|'suspended'|null $Status
 * @property string|null $StatusMessage
 * @property bool|null $CapacityManagerProvided
 * @property \Aws\Api\DateTimeResult|null $EarliestDatapointTimestamp
 */
class CapacityManagerMonitoredTagKey extends Shape
{
    /**
     * @param array{
     *     TagKey?: string|null,
     *     Status?: 'activating'|'activated'|'deactivating'|'suspended'|null,
     *     StatusMessage?: string|null,
     *     CapacityManagerProvided?: bool|null,
     *     EarliestDatapointTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
