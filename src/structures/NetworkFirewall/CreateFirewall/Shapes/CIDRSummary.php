<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AvailableCIDRCount
 * @property int $UtilizedCIDRCount
 * @property array<string, IPSetMetadata> $IPSetReferences
 */
class CIDRSummary extends Shape
{
    /**
     * @param array{
     *     AvailableCIDRCount?: int,
     *     UtilizedCIDRCount?: int,
     *     IPSetReferences?: array<string, IPSetMetadata>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
