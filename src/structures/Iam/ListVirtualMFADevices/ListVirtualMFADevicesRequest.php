<?php

namespace Sunaoka\Aws\Structures\Iam\ListVirtualMFADevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Assigned'|'Unassigned'|'Any' $AssignmentStatus
 * @property string $Marker
 * @property int $MaxItems
 */
class ListVirtualMFADevicesRequest extends Request
{
    /**
     * @param array{
     *     AssignmentStatus?: 'Assigned'|'Unassigned'|'Any',
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
