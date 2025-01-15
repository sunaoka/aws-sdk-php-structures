<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $UserId
 * @property string $StackName
 * @property string $FleetName
 * @property 'ACTIVE'|'PENDING'|'EXPIRED' $State
 * @property 'CONNECTED'|'NOT_CONNECTED'|null $ConnectionState
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $MaxExpirationTime
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD'|null $AuthenticationType
 * @property NetworkAccessConfiguration|null $NetworkAccessConfiguration
 * @property string|null $InstanceId
 */
class Session extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     UserId: string,
     *     StackName: string,
     *     FleetName: string,
     *     State: 'ACTIVE'|'PENDING'|'EXPIRED',
     *     ConnectionState?: 'CONNECTED'|'NOT_CONNECTED'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     MaxExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     AuthenticationType?: 'API'|'SAML'|'USERPOOL'|'AWS_AD'|null,
     *     NetworkAccessConfiguration?: NetworkAccessConfiguration|null,
     *     InstanceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
