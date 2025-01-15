<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AssociateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $IpAddresses
 */
class EndpointNetworkConfiguration extends Shape
{
    /**
     * @param array{IpAddresses?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
