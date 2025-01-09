<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $UserId
 * @property string $StackName
 * @property string $FleetName
 * @property 'ACTIVE'|'PENDING'|'EXPIRED' $State
 * @property 'CONNECTED'|'NOT_CONNECTED' $ConnectionState
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $MaxExpirationTime
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 * @property NetworkAccessConfiguration $NetworkAccessConfiguration
 * @property string $InstanceId
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
     *     ConnectionState?: 'CONNECTED'|'NOT_CONNECTED',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     MaxExpirationTime?: \Aws\Api\DateTimeResult,
     *     AuthenticationType?: 'API'|'SAML'|'USERPOOL'|'AWS_AD',
     *     NetworkAccessConfiguration?: NetworkAccessConfiguration,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
