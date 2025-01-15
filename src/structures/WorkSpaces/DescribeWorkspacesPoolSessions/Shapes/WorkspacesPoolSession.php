<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPoolSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SAML'|null $AuthenticationType
 * @property 'CONNECTED'|'NOT_CONNECTED'|null $ConnectionState
 * @property string $SessionId
 * @property string|null $InstanceId
 * @property string $PoolId
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property NetworkAccessConfiguration|null $NetworkAccessConfiguration
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string $UserId
 */
class WorkspacesPoolSession extends Shape
{
    /**
     * @param array{
     *     AuthenticationType?: 'SAML'|null,
     *     ConnectionState?: 'CONNECTED'|'NOT_CONNECTED'|null,
     *     SessionId: string,
     *     InstanceId?: string|null,
     *     PoolId: string,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     NetworkAccessConfiguration?: NetworkAccessConfiguration|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
