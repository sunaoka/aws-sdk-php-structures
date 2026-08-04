<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyApplicationStatusCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationStatusCheckId
 * @property 'included'|'excluded'|null $Aggregation
 * @property list<HealthCheckPathResponseObject>|null $HealthCheckPaths
 * @property 'http'|'https'|null $Protocol
 * @property int|null $Port
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
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property list<CustomTagKeyValueResponsePair>|null $TargetTagAssociations
 * @property list<Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $ModifyTime
 * @property \Aws\Api\DateTimeResult|null $DeletionTime
 */
class ApplicationStatusCheckResponseObject extends Shape
{
    /**
     * @param array{
     *     ApplicationStatusCheckId?: string|null,
     *     Aggregation?: 'included'|'excluded'|null,
     *     HealthCheckPaths?: list<HealthCheckPathResponseObject>|null,
     *     Protocol?: 'http'|'https'|null,
     *     Port?: int|null,
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
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     TargetTagAssociations?: list<CustomTagKeyValueResponsePair>|null,
     *     Tags?: list<Tag>|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ModifyTime?: \Aws\Api\DateTimeResult|null,
     *     DeletionTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
