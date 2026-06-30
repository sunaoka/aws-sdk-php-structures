<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeDomainValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainScope|null $DomainScope
 * @property string|null $HostedZoneId
 * @property ResourceRecord|null $ResourceRecord
 */
class DnsPrevalidationDetails extends Shape
{
    /**
     * @param array{
     *     DomainScope?: DomainScope|null,
     *     HostedZoneId?: string|null,
     *     ResourceRecord?: ResourceRecord|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
