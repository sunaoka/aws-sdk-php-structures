<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DnsRecord> $DnsRecords
 */
class DnsConfigChange extends Shape
{
    /**
     * @param array{DnsRecords: list<DnsRecord>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
