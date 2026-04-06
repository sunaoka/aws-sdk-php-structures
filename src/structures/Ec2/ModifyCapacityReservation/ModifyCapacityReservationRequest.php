<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property int|null $InstanceCount
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property 'unlimited'|'limited'|null $EndDateType
 * @property bool|null $Accept
 * @property bool|null $DryRun
 * @property string|null $AdditionalInfo
 * @property 'open'|'targeted'|null $InstanceMatchCriteria
 */
class ModifyCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     InstanceCount?: int|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     EndDateType?: 'unlimited'|'limited'|null,
     *     Accept?: bool|null,
     *     DryRun?: bool|null,
     *     AdditionalInfo?: string|null,
     *     InstanceMatchCriteria?: 'open'|'targeted'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
