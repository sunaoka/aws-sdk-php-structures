<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DeletePrivateConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 */
class DeletePrivateConnectionResponse extends Response
{
}
