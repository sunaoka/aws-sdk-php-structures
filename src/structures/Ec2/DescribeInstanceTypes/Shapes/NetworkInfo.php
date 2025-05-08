<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkPerformance
 * @property int|null $MaximumNetworkInterfaces
 * @property int|null $MaximumNetworkCards
 * @property int|null $DefaultNetworkCardIndex
 * @property list<NetworkCardInfo>|null $NetworkCards
 * @property int|null $Ipv4AddressesPerInterface
 * @property int|null $Ipv6AddressesPerInterface
 * @property bool|null $Ipv6Supported
 * @property 'unsupported'|'supported'|'required'|null $EnaSupport
 * @property bool|null $EfaSupported
 * @property EfaInfo|null $EfaInfo
 * @property bool|null $EncryptionInTransitSupported
 * @property bool|null $EnaSrdSupported
 * @property list<'default'|'vpc-1'|'ebs-1'>|null $BandwidthWeightings
 * @property 'unsupported'|'supported'|null $FlexibleEnaQueuesSupport
 */
class NetworkInfo extends Shape
{
    /**
     * @param array{
     *     NetworkPerformance?: string|null,
     *     MaximumNetworkInterfaces?: int|null,
     *     MaximumNetworkCards?: int|null,
     *     DefaultNetworkCardIndex?: int|null,
     *     NetworkCards?: list<NetworkCardInfo>|null,
     *     Ipv4AddressesPerInterface?: int|null,
     *     Ipv6AddressesPerInterface?: int|null,
     *     Ipv6Supported?: bool|null,
     *     EnaSupport?: 'unsupported'|'supported'|'required'|null,
     *     EfaSupported?: bool|null,
     *     EfaInfo?: EfaInfo|null,
     *     EncryptionInTransitSupported?: bool|null,
     *     EnaSrdSupported?: bool|null,
     *     BandwidthWeightings?: list<'default'|'vpc-1'|'ebs-1'>|null,
     *     FlexibleEnaQueuesSupport?: 'unsupported'|'supported'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
