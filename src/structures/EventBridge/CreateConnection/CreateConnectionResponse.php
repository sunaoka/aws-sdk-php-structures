<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConnectionArn
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|'ACTIVE'|'FAILED_CONNECTIVITY' $ConnectionState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class CreateConnectionResponse extends Response
{
}
