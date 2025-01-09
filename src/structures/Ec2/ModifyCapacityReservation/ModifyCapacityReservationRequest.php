<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property int $InstanceCount
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property 'unlimited'|'limited' $EndDateType
 * @property bool $Accept
 * @property bool $DryRun
 * @property string $AdditionalInfo
 * @property 'open'|'targeted' $InstanceMatchCriteria
 */
class ModifyCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     InstanceCount?: int,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     EndDateType?: 'unlimited'|'limited',
     *     Accept?: bool,
     *     DryRun?: bool,
     *     AdditionalInfo?: string,
     *     InstanceMatchCriteria?: 'open'|'targeted'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
