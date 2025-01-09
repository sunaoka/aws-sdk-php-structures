<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $securityPolicy
 */
class TlsConfig extends Shape
{
    /**
     * @param array{securityPolicy?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
