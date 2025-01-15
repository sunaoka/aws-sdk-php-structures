<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $Type
 * @property string|null $SetIdentifier
 * @property int<0, 255>|null $Weight
 * @property 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'ca-central-1'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'eu-central-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-northeast-1'|'ap-northeast-2'|'ap-northeast-3'|'eu-north-1'|'sa-east-1'|'cn-north-1'|'cn-northwest-1'|'ap-east-1'|'me-south-1'|'me-central-1'|'ap-south-1'|'ap-south-2'|'af-south-1'|'eu-south-1'|'eu-south-2'|'ap-southeast-4'|'il-central-1'|'ca-west-1'|'ap-southeast-5'|'mx-central-1'|'ap-southeast-7'|null $Region
 * @property GeoLocation|null $GeoLocation
 * @property 'PRIMARY'|'SECONDARY'|null $Failover
 * @property bool|null $MultiValueAnswer
 * @property int<0, 2147483647>|null $TTL
 * @property list<ResourceRecord>|null $ResourceRecords
 * @property AliasTarget|null $AliasTarget
 * @property string|null $HealthCheckId
 * @property string|null $TrafficPolicyInstanceId
 * @property CidrRoutingConfig|null $CidrRoutingConfig
 * @property GeoProximityLocation|null $GeoProximityLocation
 */
class ResourceRecordSet extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS',
     *     SetIdentifier?: string|null,
     *     Weight?: int<0, 255>|null,
     *     Region?: 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'ca-central-1'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'eu-central-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-northeast-1'|'ap-northeast-2'|'ap-northeast-3'|'eu-north-1'|'sa-east-1'|'cn-north-1'|'cn-northwest-1'|'ap-east-1'|'me-south-1'|'me-central-1'|'ap-south-1'|'ap-south-2'|'af-south-1'|'eu-south-1'|'eu-south-2'|'ap-southeast-4'|'il-central-1'|'ca-west-1'|'ap-southeast-5'|'mx-central-1'|'ap-southeast-7'|null,
     *     GeoLocation?: GeoLocation|null,
     *     Failover?: 'PRIMARY'|'SECONDARY'|null,
     *     MultiValueAnswer?: bool|null,
     *     TTL?: int<0, 2147483647>|null,
     *     ResourceRecords?: list<ResourceRecord>|null,
     *     AliasTarget?: AliasTarget|null,
     *     HealthCheckId?: string|null,
     *     TrafficPolicyInstanceId?: string|null,
     *     CidrRoutingConfig?: CidrRoutingConfig|null,
     *     GeoProximityLocation?: GeoProximityLocation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
