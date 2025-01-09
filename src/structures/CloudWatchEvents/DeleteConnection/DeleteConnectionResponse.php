<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeleteConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConnectionArn
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING' $ConnectionState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $LastAuthorizedTime
 */
class DeleteConnectionResponse extends Response
{
}
