<?php

namespace Sunaoka\Aws\Structures\Ses\PutConfigurationSetDeliveryOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Require'|'Optional'|null $TlsPolicy
 */
class DeliveryOptions extends Shape
{
    /**
     * @param array{TlsPolicy?: 'Require'|'Optional'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
