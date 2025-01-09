<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeVPCConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property string $AvailabilityZone
 * @property string $ErrorMessage
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'|'DELETION_SCHEDULED'|'ATTACHMENT_FAILED_ROLLBACK_FAILED' $Status
 * @property string $NetworkInterfaceId
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string,
     *     AvailabilityZone?: string,
     *     ErrorMessage?: string,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'|'DELETION_SCHEDULED'|'ATTACHMENT_FAILED_ROLLBACK_FAILED',
     *     NetworkInterfaceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
