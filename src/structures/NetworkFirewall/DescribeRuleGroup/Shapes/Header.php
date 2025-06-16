<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IP'|'TCP'|'UDP'|'ICMP'|'HTTP'|'FTP'|'TLS'|'SMB'|'DNS'|'DCERPC'|'SSH'|'SMTP'|'IMAP'|'MSN'|'KRB5'|'IKEV2'|'TFTP'|'NTP'|'DHCP'|'HTTP2'|'QUIC' $Protocol
 * @property string $Source
 * @property string $SourcePort
 * @property 'FORWARD'|'ANY' $Direction
 * @property string $Destination
 * @property string $DestinationPort
 */
class Header extends Shape
{
    /**
     * @param array{
     *     Protocol: 'IP'|'TCP'|'UDP'|'ICMP'|'HTTP'|'FTP'|'TLS'|'SMB'|'DNS'|'DCERPC'|'SSH'|'SMTP'|'IMAP'|'MSN'|'KRB5'|'IKEV2'|'TFTP'|'NTP'|'DHCP'|'HTTP2'|'QUIC',
     *     Source: string,
     *     SourcePort: string,
     *     Direction: 'FORWARD'|'ANY',
     *     Destination: string,
     *     DestinationPort: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
