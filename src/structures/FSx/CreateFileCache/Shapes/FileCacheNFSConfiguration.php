<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NFS3' $Version
 * @property list<string> $DnsIps
 */
class FileCacheNFSConfiguration extends Shape
{
    /**
     * @param array{
     *     Version: 'NFS3',
     *     DnsIps?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
