<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateTargetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $token
 * @property string|null $dnsRecordName
 * @property 'TXT'|null $dnsRecordType
 */
class DnsVerification extends Shape
{
    /**
     * @param array{
     *     token?: string|null,
     *     dnsRecordName?: string|null,
     *     dnsRecordType?: 'TXT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
