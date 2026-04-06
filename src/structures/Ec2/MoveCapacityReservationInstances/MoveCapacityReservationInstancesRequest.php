<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveCapacityReservationInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property string $SourceCapacityReservationId
 * @property string $DestinationCapacityReservationId
 * @property int $InstanceCount
 */
class MoveCapacityReservationInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
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
