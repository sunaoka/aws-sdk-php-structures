<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $securityPolicy
 */
class TlsConfig extends Shape
{
    /**
     * @param array{securityPolicy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
