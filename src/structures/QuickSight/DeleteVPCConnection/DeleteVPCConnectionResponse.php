<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteVPCConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $VPCConnectionId
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETION_IN_PROGRESS'|'DELETION_FAILED'|'DELETED' $DeletionStatus
 * @property 'AVAILABLE'|'UNAVAILABLE'|'PARTIALLY_AVAILABLE' $AvailabilityStatus
 * @property string $RequestId
 * @property int $Status
 */
class DeleteVPCConnectionResponse extends Response
{
}
