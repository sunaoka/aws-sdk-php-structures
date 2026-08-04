<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyApplicationStatusCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationStatusCheckId
 * @property 'included'|'excluded'|null $Aggregation
 * @property list<Shapes\HealthCheckPathRequestObject>|null $HealthCheckPaths
 * @property 'http'|'https'|null $Protocol
 * @property int<1, 65535>|null $Port
 * @property string|null $Path
 * @property int|null $DeviceIndex
 * @property 'ipv4'|'ipv6'|null $IpVersion
 * @property 'private'|null $IpScope
 * @property int|null $Interval
 * @property int|null $Timeout
 * @property int|null $FailureThreshold
 * @property int|null $SuccessThreshold
 * @property string|null $StatusCodeMatcher
 * @property int<-1, 600>|null $InitializationGracePeriodSeconds
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class ModifyApplicationStatusCheckRequest extends Request
{
    /**
     * @param array{
     *     ApplicationStatusCheckId: string,
     *     Aggregation?: 'included'|'excluded'|null,
     *     HealthCheckPaths?: list<Shapes\HealthCheckPathRequestObject>|null,
     *     Protocol?: 'http'|'https'|null,
     *     Port?: int<1, 65535>|null,
     *     Path?: string|null,
     *     DeviceIndex?: int|null,
     *     IpVersion?: 'ipv4'|'ipv6'|null,
     *     IpScope?: 'private'|null,
     *     Interval?: int|null,
     *     Timeout?: int|null,
     *     FailureThreshold?: int|null,
     *     SuccessThreshold?: int|null,
     *     StatusCodeMatcher?: string|null,
     *     InitializationGracePeriodSeconds?: int<-1, 600>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
