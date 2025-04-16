<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ConnectionArn
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\DescribeConnectionConnectivityParameters|null $InvocationConnectivityParameters
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|'ACTIVE'|'FAILED_CONNECTIVITY'|null $ConnectionState
 * @property string|null $StateReason
 * @property 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY'|null $AuthorizationType
 * @property string|null $SecretArn
 * @property string|null $KmsKeyIdentifier
 * @property Shapes\ConnectionAuthResponseParameters|null $AuthParameters
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $LastAuthorizedTime
 */
class DescribeConnectionResponse extends Response
{
}
