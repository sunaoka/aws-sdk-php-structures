<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeFileSystemAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $IpAddresses
 */
class EndpointNetworkConfiguration extends Shape
{
    /**
     * @param array{IpAddresses?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
