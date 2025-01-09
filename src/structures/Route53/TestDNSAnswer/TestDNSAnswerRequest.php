<?php

namespace Sunaoka\Aws\Structures\Route53\TestDNSAnswer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string $RecordName
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $RecordType
 * @property string $ResolverIP
 * @property string $EDNS0ClientSubnetIP
 * @property string $EDNS0ClientSubnetMask
 */
class TestDNSAnswerRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     RecordName: string,
     *     RecordType: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS',
     *     ResolverIP?: string,
     *     EDNS0ClientSubnetIP?: string,
     *     EDNS0ClientSubnetMask?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
