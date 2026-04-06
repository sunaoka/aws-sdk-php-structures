<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $VpcEndpointId
 * @property string|null $ServiceNetworkArn
 * @property string|null $ServiceNetworkName
 * @property string|null $AssociatedResourceAccessibility
 * @property string|null $FailureReason
 * @property string|null $FailureCode
 * @property DnsEntry|null $DnsEntry
 * @property DnsEntry|null $PrivateDnsEntry
 * @property string|null $AssociatedResourceArn
 * @property string|null $ResourceConfigurationGroupArn
 * @property list<Tag>|null $Tags
 */
class VpcEndpointAssociation extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     VpcEndpointId?: string|null,
     *     ServiceNetworkArn?: string|null,
     *     ServiceNetworkName?: string|null,
     *     AssociatedResourceAccessibility?: string|null,
     *     FailureReason?: string|null,
     *     FailureCode?: string|null,
     *     DnsEntry?: DnsEntry|null,
     *     PrivateDnsEntry?: DnsEntry|null,
     *     AssociatedResourceArn?: string|null,
     *     ResourceConfigurationGroupArn?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
