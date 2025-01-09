<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConnectionArn
 * @property string $Name
 * @property string $Description
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING' $ConnectionState
 * @property string $StateReason
 * @property 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY' $AuthorizationType
 * @property string $SecretArn
 * @property Shapes\ConnectionAuthResponseParameters $AuthParameters
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $LastAuthorizedTime
 */
class DescribeConnectionResponse extends Response
{
}
