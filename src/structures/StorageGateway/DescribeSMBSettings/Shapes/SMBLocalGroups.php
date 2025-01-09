<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSMBSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $GatewayAdmins
 */
class SMBLocalGroups extends Shape
{
    /**
     * @param array{GatewayAdmins?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
