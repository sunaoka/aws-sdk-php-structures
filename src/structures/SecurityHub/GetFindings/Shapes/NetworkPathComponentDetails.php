<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Address
 * @property list<PortRange>|null $PortRanges
 */
class NetworkPathComponentDetails extends Shape
{
    /**
     * @param array{
     *     Address?: list<string>|null,
     *     PortRanges?: list<PortRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
