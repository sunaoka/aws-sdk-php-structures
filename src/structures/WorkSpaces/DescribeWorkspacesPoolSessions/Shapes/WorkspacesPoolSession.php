<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPoolSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SAML' $AuthenticationType
 * @property 'CONNECTED'|'NOT_CONNECTED' $ConnectionState
 * @property string $SessionId
 * @property string $InstanceId
 * @property string $PoolId
 * @property \Aws\Api\DateTimeResult $ExpirationTime
 * @property NetworkAccessConfiguration $NetworkAccessConfiguration
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $UserId
 */
class WorkspacesPoolSession extends Shape
{
    /**
     * @param array{
     *     AuthenticationType?: 'SAML',
     *     ConnectionState?: 'CONNECTED'|'NOT_CONNECTED',
     *     SessionId: string,
     *     InstanceId?: string,
     *     PoolId: string,
     *     ExpirationTime?: \Aws\Api\DateTimeResult,
     *     NetworkAccessConfiguration?: NetworkAccessConfiguration,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
