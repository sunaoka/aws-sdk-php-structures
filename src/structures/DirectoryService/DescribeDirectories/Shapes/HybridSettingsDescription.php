<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SelfManagedDnsIpAddrs
 * @property list<string>|null $SelfManagedInstanceIds
 */
class HybridSettingsDescription extends Shape
{
    /**
     * @param array{
     *     SelfManagedDnsIpAddrs?: list<string>|null,
     *     SelfManagedInstanceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
