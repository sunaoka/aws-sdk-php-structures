<?php

namespace Sunaoka\Aws\Structures\Iam\ListVirtualMFADevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Assigned'|'Unassigned'|'Any'|null $AssignmentStatus
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListVirtualMFADevicesRequest extends Request
{
    /**
     * @param array{
     *     AssignmentStatus?: 'Assigned'|'Unassigned'|'Any'|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
