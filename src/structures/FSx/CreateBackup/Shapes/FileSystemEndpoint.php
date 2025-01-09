<?php

namespace Sunaoka\Aws\Structures\FSx\CreateBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DNSName
 * @property list<string> $IpAddresses
 */
class FileSystemEndpoint extends Shape
{
    /**
     * @param array{
     *     DNSName?: string,
     *     IpAddresses?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
