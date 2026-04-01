<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DnsNameFilter|null $DnsName
 */
class SubjectAlternativeNameFilter extends Shape
{
    /**
     * @param array{DnsName?: DnsNameFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
