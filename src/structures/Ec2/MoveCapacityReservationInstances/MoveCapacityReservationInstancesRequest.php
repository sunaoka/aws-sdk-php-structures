<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveCapacityReservationInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ClientToken
 * @property string $SourceCapacityReservationId
 * @property string $DestinationCapacityReservationId
 * @property int $InstanceCount
 */
class MoveCapacityReservationInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     SourceCapacityReservationId: string,
     *     DestinationCapacityReservationId: string,
     *     InstanceCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
