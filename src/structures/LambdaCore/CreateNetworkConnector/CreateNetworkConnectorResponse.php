<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateNetworkConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Id
 * @property Shapes\NetworkConnectorConfiguration|null $Configuration
 * @property string|null $OperatorRole
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED'|null $State
 */
class CreateNetworkConnectorResponse extends Response
{
}
