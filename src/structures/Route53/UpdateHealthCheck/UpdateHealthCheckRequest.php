<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHealthCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HealthCheckId
 * @property int<1, max> $HealthCheckVersion
 * @property string $IPAddress
 * @property int<1, 65535> $Port
 * @property string $ResourcePath
 * @property string $FullyQualifiedDomainName
 * @property string $SearchString
 * @property int<1, 10> $FailureThreshold
 * @property bool $Inverted
 * @property bool $Disabled
 * @property int<0, 256> $HealthThreshold
 * @property list<string> $ChildHealthChecks
 * @property bool $EnableSNI
 * @property list<'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'> $Regions
 * @property Shapes\AlarmIdentifier $AlarmIdentifier
 * @property 'Healthy'|'Unhealthy'|'LastKnownStatus' $InsufficientDataHealthStatus
 * @property list<'FullyQualifiedDomainName'|'Regions'|'ResourcePath'|'ChildHealthChecks'> $ResetElements
 */
class UpdateHealthCheckRequest extends Request
{
    /**
     * @param array{
     *     HealthCheckId: string,
     *     HealthCheckVersion?: int<1, max>,
     *     IPAddress?: string,
     *     Port?: int<1, 65535>,
     *     ResourcePath?: string,
     *     FullyQualifiedDomainName?: string,
     *     SearchString?: string,
     *     FailureThreshold?: int<1, 10>,
     *     Inverted?: bool,
     *     Disabled?: bool,
     *     HealthThreshold?: int<0, 256>,
     *     ChildHealthChecks?: list<string>,
     *     EnableSNI?: bool,
     *     Regions?: list<'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'>,
     *     AlarmIdentifier?: Shapes\AlarmIdentifier,
     *     InsufficientDataHealthStatus?: 'Healthy'|'Unhealthy'|'LastKnownStatus',
     *     ResetElements?: list<'FullyQualifiedDomainName'|'Regions'|'ResourcePath'|'ChildHealthChecks'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
