<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeleteConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ConnectionArn
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|'ACTIVE'|'FAILED_CONNECTIVITY'|null $ConnectionState
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $LastAuthorizedTime
 */
class DeleteConnectionResponse extends Response
{
}
