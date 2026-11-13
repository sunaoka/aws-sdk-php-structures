<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSetProtections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecordName
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $RecordType
 * @property string|null $Comment
 */
class ResourceRecordSetProtection extends Shape
{
    /**
     * @param array{
     *     RecordName: string,
     *     RecordType: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS',
     *     Comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
