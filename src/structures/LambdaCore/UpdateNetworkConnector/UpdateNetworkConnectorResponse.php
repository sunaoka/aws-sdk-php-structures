<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateNetworkConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Id
 * @property string|null $OperatorRole
 * @property Shapes\NetworkConnectorConfiguration|null $Configuration
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED'|null $State
 * @property 'Successful'|'Failed'|'InProgress'|null $LastUpdateStatus
 * @property string|null $LastUpdateStatusReason
 * @property \Aws\Api\DateTimeResult|null $LastModified
 */
class UpdateNetworkConnectorResponse extends Response
{
}
