<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateApplicationStatusCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\HealthCheckPathRequestObject>|null $HealthCheckPaths
 * @property 'included'|'excluded'|null $Aggregation
 * @property 'http'|'https' $Protocol
 * @property int<1, 65535> $Port
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
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class CreateApplicationStatusCheckRequest extends Request
{
    /**
     * @param array{
     *     HealthCheckPaths?: list<Shapes\HealthCheckPathRequestObject>|null,
     *     Aggregation?: 'included'|'excluded'|null,
     *     Protocol: 'http'|'https',
     *     Port: int<1, 65535>,
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
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
