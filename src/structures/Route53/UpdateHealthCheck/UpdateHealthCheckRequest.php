<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHealthCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HealthCheckId
 * @property int<1, max>|null $HealthCheckVersion
 * @property string|null $IPAddress
 * @property int<1, 65535>|null $Port
 * @property string|null $ResourcePath
 * @property string|null $FullyQualifiedDomainName
 * @property string|null $SearchString
 * @property int<1, 10>|null $FailureThreshold
 * @property bool|null $Inverted
 * @property bool|null $Disabled
 * @property int<0, 256>|null $HealthThreshold
 * @property list<string>|null $ChildHealthChecks
 * @property bool|null $EnableSNI
 * @property list<'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'>|null $Regions
 * @property Shapes\AlarmIdentifier|null $AlarmIdentifier
 * @property 'Healthy'|'Unhealthy'|'LastKnownStatus'|null $InsufficientDataHealthStatus
 * @property list<'FullyQualifiedDomainName'|'Regions'|'ResourcePath'|'ChildHealthChecks'>|null $ResetElements
 */
class UpdateHealthCheckRequest extends Request
{
    /**
     * @param array{
     *     HealthCheckId: string,
     *     HealthCheckVersion?: int<1, max>|null,
     *     IPAddress?: string|null,
     *     Port?: int<1, 65535>|null,
     *     ResourcePath?: string|null,
     *     FullyQualifiedDomainName?: string|null,
     *     SearchString?: string|null,
     *     FailureThreshold?: int<1, 10>|null,
     *     Inverted?: bool|null,
     *     Disabled?: bool|null,
     *     HealthThreshold?: int<0, 256>|null,
     *     ChildHealthChecks?: list<string>|null,
     *     EnableSNI?: bool|null,
     *     Regions?: list<'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'>|null,
     *     AlarmIdentifier?: Shapes\AlarmIdentifier|null,
     *     InsufficientDataHealthStatus?: 'Healthy'|'Unhealthy'|'LastKnownStatus'|null,
     *     ResetElements?: list<'FullyQualifiedDomainName'|'Regions'|'ResourcePath'|'ChildHealthChecks'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
