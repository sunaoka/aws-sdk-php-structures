<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'DNS'|'HTTP'|null $From
 * @property 'EMAIL'|'DNS'|'HTTP'|null $To
 */
class DomainValidationMethodUpdateSummary extends Shape
{
    /**
     * @param array{
     *     From?: 'EMAIL'|'DNS'|'HTTP'|null,
     *     To?: 'EMAIL'|'DNS'|'HTTP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
