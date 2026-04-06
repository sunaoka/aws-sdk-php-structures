<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateActionConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $CreationStatus
 * @property string|null $ActionConnectorId
 * @property string|null $RequestId
 * @property int|null $Status
 */
class CreateActionConnectorResponse extends Response
{
}
