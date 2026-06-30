<?php

namespace Sunaoka\Aws\Structures\Acm\CreateAcmeDomainValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DnsPrevalidationOptions|null $DnsPrevalidation
 */
class PrevalidationOptions extends Shape
{
    /**
     * @param array{DnsPrevalidation?: DnsPrevalidationOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
