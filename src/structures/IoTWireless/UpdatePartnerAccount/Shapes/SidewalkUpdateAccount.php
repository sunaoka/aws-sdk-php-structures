<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdatePartnerAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppServerPrivateKey
 */
class SidewalkUpdateAccount extends Shape
{
    /**
     * @param array{AppServerPrivateKey?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
