<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Address
 * @property list<PortRange> $PortRanges
 */
class NetworkPathComponentDetails extends Shape
{
    /**
     * @param array{
     *     Address?: list<string>,
     *     PortRanges?: list<PortRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
