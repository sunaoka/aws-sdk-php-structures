<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteVPCConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $VPCConnectionId
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETION_IN_PROGRESS'|'DELETION_FAILED'|'DELETED'|null $DeletionStatus
 * @property 'AVAILABLE'|'UNAVAILABLE'|'PARTIALLY_AVAILABLE'|null $AvailabilityStatus
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DeleteVPCConnectionResponse extends Response
{
}
