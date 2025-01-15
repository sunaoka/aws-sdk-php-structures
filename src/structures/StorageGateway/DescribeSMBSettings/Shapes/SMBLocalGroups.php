<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSMBSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $GatewayAdmins
 */
class SMBLocalGroups extends Shape
{
    /**
     * @param array{GatewayAdmins?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
