<?php

namespace Sunaoka\Aws\Structures\FMS\PutPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NetworkAclEntry>|null $FirstEntries
 * @property bool $ForceRemediateForFirstEntries
 * @property list<NetworkAclEntry>|null $LastEntries
 * @property bool $ForceRemediateForLastEntries
 */
class NetworkAclEntrySet extends Shape
{
    /**
     * @param array{
     *     FirstEntries?: list<NetworkAclEntry>|null,
     *     ForceRemediateForFirstEntries: bool,
     *     LastEntries?: list<NetworkAclEntry>|null,
     *     ForceRemediateForLastEntries: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
