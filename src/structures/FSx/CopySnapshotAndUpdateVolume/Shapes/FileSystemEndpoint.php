<?php

namespace Sunaoka\Aws\Structures\FSx\CopySnapshotAndUpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DNSName
 * @property list<string>|null $IpAddresses
 */
class FileSystemEndpoint extends Shape
{
    /**
     * @param array{
     *     DNSName?: string|null,
     *     IpAddresses?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
