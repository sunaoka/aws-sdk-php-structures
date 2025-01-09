<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionArn
 * @property string $Name
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|'ACTIVE'|'FAILED_CONNECTIVITY' $ConnectionState
 * @property string $StateReason
 * @property 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY' $AuthorizationType
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $LastAuthorizedTime
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ConnectionArn?: string,
     *     Name?: string,
     *     ConnectionState?: 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|'ACTIVE'|'FAILED_CONNECTIVITY',
     *     StateReason?: string,
     *     AuthorizationType?: 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastAuthorizedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
