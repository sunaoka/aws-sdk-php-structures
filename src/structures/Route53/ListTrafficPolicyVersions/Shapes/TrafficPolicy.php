<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int<1, 1000> $Version
 * @property string $Name
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $Type
 * @property string $Document
 * @property string|null $Comment
 */
class TrafficPolicy extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Version: int<1, 1000>,
     *     Name: string,
     *     Type: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS',
     *     Document: string,
     *     Comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
