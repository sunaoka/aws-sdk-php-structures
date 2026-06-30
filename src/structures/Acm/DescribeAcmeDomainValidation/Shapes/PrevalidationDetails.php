<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeDomainValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DnsPrevalidationDetails|null $DnsPrevalidation
 */
class PrevalidationDetails extends Shape
{
    /**
     * @param array{DnsPrevalidation?: DnsPrevalidationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
