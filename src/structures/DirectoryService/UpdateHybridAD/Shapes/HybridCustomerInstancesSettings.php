<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateHybridAD\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CustomerDnsIps
 * @property list<string> $InstanceIds
 */
class HybridCustomerInstancesSettings extends Shape
{
    /**
     * @param array{
     *     CustomerDnsIps: list<string>,
     *     InstanceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
