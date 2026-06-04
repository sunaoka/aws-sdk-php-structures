<?php

namespace Sunaoka\Aws\Structures\Emr\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ClusterId
 * @property string|null $Name
 * @property string $Arn
 * @property 'SUBMITTED'|'STARTING'|'STARTED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'FAILED' $State
 * @property string|null $StateChangeReason
 * @property string|null $ReleaseLabel
 * @property string|null $ExecutionRoleArn
 * @property string|null $AccountId
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property \Aws\Api\DateTimeResult|null $IdleSince
 * @property list<Configuration>|null $EngineConfigurations
 * @property SessionMonitoringConfiguration|null $MonitoringConfiguration
 * @property int|null $SessionIdleTimeoutInMinutes
 * @property CertificateAuthority|null $CertificateAuthority
 * @property string|null $ServerUrl
 * @property list<Tag>|null $Tags
 */
class Session extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ClusterId: string,
     *     Name?: string|null,
     *     Arn: string,
     *     State: 'SUBMITTED'|'STARTING'|'STARTED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'FAILED',
     *     StateChangeReason?: string|null,
     *     ReleaseLabel?: string|null,
     *     ExecutionRoleArn?: string|null,
     *     AccountId?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     EndedAt?: \Aws\Api\DateTimeResult|null,
     *     IdleSince?: \Aws\Api\DateTimeResult|null,
     *     EngineConfigurations?: list<Configuration>|null,
     *     MonitoringConfiguration?: SessionMonitoringConfiguration|null,
     *     SessionIdleTimeoutInMinutes?: int|null,
     *     CertificateAuthority?: CertificateAuthority|null,
     *     ServerUrl?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
