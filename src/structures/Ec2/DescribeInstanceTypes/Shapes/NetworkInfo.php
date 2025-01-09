<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkPerformance
 * @property int $MaximumNetworkInterfaces
 * @property int $MaximumNetworkCards
 * @property int $DefaultNetworkCardIndex
 * @property list<NetworkCardInfo> $NetworkCards
 * @property int $Ipv4AddressesPerInterface
 * @property int $Ipv6AddressesPerInterface
 * @property bool $Ipv6Supported
 * @property 'unsupported'|'supported'|'required' $EnaSupport
 * @property bool $EfaSupported
 * @property EfaInfo $EfaInfo
 * @property bool $EncryptionInTransitSupported
 * @property bool $EnaSrdSupported
 * @property list<'default'|'vpc-1'|'ebs-1'> $BandwidthWeightings
 */
class NetworkInfo extends Shape
{
    /**
     * @param array{
     *     NetworkPerformance?: string,
     *     MaximumNetworkInterfaces?: int,
     *     MaximumNetworkCards?: int,
     *     DefaultNetworkCardIndex?: int,
     *     NetworkCards?: list<NetworkCardInfo>,
     *     Ipv4AddressesPerInterface?: int,
     *     Ipv6AddressesPerInterface?: int,
     *     Ipv6Supported?: bool,
     *     EnaSupport?: 'unsupported'|'supported'|'required',
     *     EfaSupported?: bool,
     *     EfaInfo?: EfaInfo,
     *     EncryptionInTransitSupported?: bool,
     *     EnaSrdSupported?: bool,
     *     BandwidthWeightings?: list<'default'|'vpc-1'|'ebs-1'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
