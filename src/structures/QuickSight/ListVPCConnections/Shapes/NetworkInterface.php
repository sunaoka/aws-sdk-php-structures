<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListVPCConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 * @property string|null $AvailabilityZone
 * @property string|null $ErrorMessage
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'|'DELETION_SCHEDULED'|'ATTACHMENT_FAILED_ROLLBACK_FAILED'|null $Status
 * @property string|null $NetworkInterfaceId
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string|null,
     *     AvailabilityZone?: string|null,
     *     ErrorMessage?: string|null,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'|'DELETION_SCHEDULED'|'ATTACHMENT_FAILED_ROLLBACK_FAILED'|null,
     *     NetworkInterfaceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
