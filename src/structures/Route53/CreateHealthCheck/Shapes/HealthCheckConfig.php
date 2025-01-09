<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHealthCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IPAddress
 * @property int<1, 65535> $Port
 * @property 'HTTP'|'HTTPS'|'HTTP_STR_MATCH'|'HTTPS_STR_MATCH'|'TCP'|'CALCULATED'|'CLOUDWATCH_METRIC'|'RECOVERY_CONTROL' $Type
 * @property string $ResourcePath
 * @property string $FullyQualifiedDomainName
 * @property string $SearchString
 * @property int<10, 30> $RequestInterval
 * @property int<1, 10> $FailureThreshold
 * @property bool $MeasureLatency
 * @property bool $Inverted
 * @property bool $Disabled
 * @property int<0, 256> $HealthThreshold
 * @property list<string> $ChildHealthChecks
 * @property bool $EnableSNI
 * @property list<'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'> $Regions
 * @property AlarmIdentifier $AlarmIdentifier
 * @property 'Healthy'|'Unhealthy'|'LastKnownStatus' $InsufficientDataHealthStatus
 * @property string $RoutingControlArn
 */
class HealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     IPAddress?: string,
     *     Port?: int<1, 65535>,
     *     Type: 'HTTP'|'HTTPS'|'HTTP_STR_MATCH'|'HTTPS_STR_MATCH'|'TCP'|'CALCULATED'|'CLOUDWATCH_METRIC'|'RECOVERY_CONTROL',
     *     ResourcePath?: string,
     *     FullyQualifiedDomainName?: string,
     *     SearchString?: string,
     *     RequestInterval?: int<10, 30>,
     *     FailureThreshold?: int<1, 10>,
     *     MeasureLatency?: bool,
     *     Inverted?: bool,
     *     Disabled?: bool,
     *     HealthThreshold?: int<0, 256>,
     *     ChildHealthChecks?: list<string>,
     *     EnableSNI?: bool,
     *     Regions?: list<'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'>,
     *     AlarmIdentifier?: AlarmIdentifier,
     *     InsufficientDataHealthStatus?: 'Healthy'|'Unhealthy'|'LastKnownStatus',
     *     RoutingControlArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
