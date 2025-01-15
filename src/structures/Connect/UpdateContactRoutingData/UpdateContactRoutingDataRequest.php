<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property int|null $QueueTimeAdjustmentSeconds
 * @property int<1, 9223372036854775807>|null $QueuePriority
 * @property Shapes\RoutingCriteriaInput|null $RoutingCriteria
 */
class UpdateContactRoutingDataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     QueueTimeAdjustmentSeconds?: int|null,
     *     QueuePriority?: int<1, 9223372036854775807>|null,
     *     RoutingCriteria?: Shapes\RoutingCriteriaInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
