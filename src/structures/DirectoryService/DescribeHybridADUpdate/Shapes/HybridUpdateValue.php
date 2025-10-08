<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeHybridADUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $InstanceIds
 * @property list<string>|null $DnsIps
 */
class HybridUpdateValue extends Shape
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     DnsIps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
