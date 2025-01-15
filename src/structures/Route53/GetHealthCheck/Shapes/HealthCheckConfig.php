<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IPAddress
 * @property int<1, 65535>|null $Port
 * @property 'HTTP'|'HTTPS'|'HTTP_STR_MATCH'|'HTTPS_STR_MATCH'|'TCP'|'CALCULATED'|'CLOUDWATCH_METRIC'|'RECOVERY_CONTROL' $Type
 * @property string|null $ResourcePath
 * @property string|null $FullyQualifiedDomainName
 * @property string|null $SearchString
 * @property int<10, 30>|null $RequestInterval
 * @property int<1, 10>|null $FailureThreshold
 * @property bool|null $MeasureLatency
 * @property bool|null $Inverted
 * @property bool|null $Disabled
 * @property int<0, 256>|null $HealthThreshold
 * @property list<string>|null $ChildHealthChecks
 * @property bool|null $EnableSNI
 * @property list<'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'>|null $Regions
 * @property AlarmIdentifier|null $AlarmIdentifier
 * @property 'Healthy'|'Unhealthy'|'LastKnownStatus'|null $InsufficientDataHealthStatus
 * @property string|null $RoutingControlArn
 */
class HealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     IPAddress?: string|null,
     *     Port?: int<1, 65535>|null,
     *     Type: 'HTTP'|'HTTPS'|'HTTP_STR_MATCH'|'HTTPS_STR_MATCH'|'TCP'|'CALCULATED'|'CLOUDWATCH_METRIC'|'RECOVERY_CONTROL',
     *     ResourcePath?: string|null,
     *     FullyQualifiedDomainName?: string|null,
     *     SearchString?: string|null,
     *     RequestInterval?: int<10, 30>|null,
     *     FailureThreshold?: int<1, 10>|null,
     *     MeasureLatency?: bool|null,
     *     Inverted?: bool|null,
     *     Disabled?: bool|null,
     *     HealthThreshold?: int<0, 256>|null,
     *     ChildHealthChecks?: list<string>|null,
     *     EnableSNI?: bool|null,
     *     Regions?: list<'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'>|null,
     *     AlarmIdentifier?: AlarmIdentifier|null,
     *     InsufficientDataHealthStatus?: 'Healthy'|'Unhealthy'|'LastKnownStatus'|null,
     *     RoutingControlArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
