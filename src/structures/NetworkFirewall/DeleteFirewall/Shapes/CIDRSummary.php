<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1000000>|null $AvailableCIDRCount
 * @property int<0, 1000000>|null $UtilizedCIDRCount
 * @property array<string, IPSetMetadata>|null $IPSetReferences
 */
class CIDRSummary extends Shape
{
    /**
     * @param array{
     *     AvailableCIDRCount?: int<0, 1000000>|null,
     *     UtilizedCIDRCount?: int<0, 1000000>|null,
     *     IPSetReferences?: array<string, IPSetMetadata>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
