<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property int $QueueTimeAdjustmentSeconds
 * @property int $QueuePriority
 * @property Shapes\RoutingCriteriaInput $RoutingCriteria
 */
class UpdateContactRoutingDataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     QueueTimeAdjustmentSeconds?: int,
     *     QueuePriority?: int,
     *     RoutingCriteria?: Shapes\RoutingCriteriaInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
