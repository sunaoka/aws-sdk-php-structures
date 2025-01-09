<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConnectionArn
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|'ACTIVE'|'FAILED_CONNECTIVITY' $ConnectionState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $LastAuthorizedTime
 */
class UpdateConnectionResponse extends Response
{
}
