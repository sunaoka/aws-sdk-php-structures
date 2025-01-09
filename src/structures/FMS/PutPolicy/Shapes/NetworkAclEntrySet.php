<?php

namespace Sunaoka\Aws\Structures\FMS\PutPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NetworkAclEntry> $FirstEntries
 * @property bool $ForceRemediateForFirstEntries
 * @property list<NetworkAclEntry> $LastEntries
 * @property bool $ForceRemediateForLastEntries
 */
class NetworkAclEntrySet extends Shape
{
    /**
     * @param array{
     *     FirstEntries?: list<NetworkAclEntry>,
     *     ForceRemediateForFirstEntries: bool,
     *     LastEntries?: list<NetworkAclEntry>,
     *     ForceRemediateForLastEntries: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
