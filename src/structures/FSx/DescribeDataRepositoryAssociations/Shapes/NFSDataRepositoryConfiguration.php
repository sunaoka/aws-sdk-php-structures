<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NFS3' $Version
 * @property list<string> $DnsIps
 * @property AutoExportPolicy $AutoExportPolicy
 */
class NFSDataRepositoryConfiguration extends Shape
{
    /**
     * @param array{
     *     Version: 'NFS3',
     *     DnsIps?: list<string>,
     *     AutoExportPolicy?: AutoExportPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
