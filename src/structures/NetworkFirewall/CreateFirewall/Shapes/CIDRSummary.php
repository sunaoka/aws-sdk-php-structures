<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1000000> $AvailableCIDRCount
 * @property int<0, 1000000> $UtilizedCIDRCount
 * @property array<string, IPSetMetadata> $IPSetReferences
 */
class CIDRSummary extends Shape
{
    /**
     * @param array{
     *     AvailableCIDRCount?: int<0, 1000000>,
     *     UtilizedCIDRCount?: int<0, 1000000>,
     *     IPSetReferences?: array<string, IPSetMetadata>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
