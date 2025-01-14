<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $Type
 * @property string $SetIdentifier
 * @property int<0, 255> $Weight
 * @property 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'ca-central-1'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'eu-central-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-northeast-1'|'ap-northeast-2'|'ap-northeast-3'|'eu-north-1'|'sa-east-1'|'cn-north-1'|'cn-northwest-1'|'ap-east-1'|'me-south-1'|'me-central-1'|'ap-south-1'|'ap-south-2'|'af-south-1'|'eu-south-1'|'eu-south-2'|'ap-southeast-4'|'il-central-1'|'ca-west-1'|'ap-southeast-5'|'mx-central-1'|'ap-southeast-7' $Region
 * @property GeoLocation $GeoLocation
 * @property 'PRIMARY'|'SECONDARY' $Failover
 * @property bool $MultiValueAnswer
 * @property int<0, 2147483647> $TTL
 * @property list<ResourceRecord> $ResourceRecords
 * @property AliasTarget $AliasTarget
 * @property string $HealthCheckId
 * @property string $TrafficPolicyInstanceId
 * @property CidrRoutingConfig $CidrRoutingConfig
 * @property GeoProximityLocation $GeoProximityLocation
 */
class ResourceRecordSet extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS',
     *     SetIdentifier?: string,
     *     Weight?: int<0, 255>,
     *     Region?: 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'ca-central-1'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'eu-central-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-northeast-1'|'ap-northeast-2'|'ap-northeast-3'|'eu-north-1'|'sa-east-1'|'cn-north-1'|'cn-northwest-1'|'ap-east-1'|'me-south-1'|'me-central-1'|'ap-south-1'|'ap-south-2'|'af-south-1'|'eu-south-1'|'eu-south-2'|'ap-southeast-4'|'il-central-1'|'ca-west-1'|'ap-southeast-5'|'mx-central-1'|'ap-southeast-7',
     *     GeoLocation?: GeoLocation,
     *     Failover?: 'PRIMARY'|'SECONDARY',
     *     MultiValueAnswer?: bool,
     *     TTL?: int<0, 2147483647>,
     *     ResourceRecords?: list<ResourceRecord>,
     *     AliasTarget?: AliasTarget,
     *     HealthCheckId?: string,
     *     TrafficPolicyInstanceId?: string,
     *     CidrRoutingConfig?: CidrRoutingConfig,
     *     GeoProximityLocation?: GeoProximityLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
