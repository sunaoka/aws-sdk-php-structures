<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolumeFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DNSName
 * @property list<string>|null $IpAddresses
 * @property list<string>|null $Ipv6Addresses
 */
class FileSystemEndpoint extends Shape
{
    /**
     * @param array{
     *     DNSName?: string|null,
     *     IpAddresses?: list<string>|null,
     *     Ipv6Addresses?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
