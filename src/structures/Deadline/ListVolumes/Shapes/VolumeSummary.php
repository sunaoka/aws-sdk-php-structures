<?php

namespace Sunaoka\Aws\Structures\Deadline\ListVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $volumeId
 * @property string $farmId
 * @property string $fleetId
 * @property 'PENDING_CREATION'|'PENDING_ATTACHMENT'|'IN_USE'|'AVAILABLE'|'PENDING_DELETION' $state
 * @property int<1, 65536> $sizeGiB
 * @property string $availabilityZoneId
 * @property string|null $attachedWorkerId
 */
class VolumeSummary extends Shape
{
    /**
     * @param array{
     *     volumeId: string,
     *     farmId: string,
     *     fleetId: string,
     *     state: 'PENDING_CREATION'|'PENDING_ATTACHMENT'|'IN_USE'|'AVAILABLE'|'PENDING_DELETION',
     *     sizeGiB: int<1, 65536>,
     *     availabilityZoneId: string,
     *     attachedWorkerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
