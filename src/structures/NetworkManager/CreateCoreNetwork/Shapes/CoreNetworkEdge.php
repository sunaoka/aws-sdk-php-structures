<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateCoreNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EdgeLocation
 * @property int $Asn
 * @property list<string> $InsideCidrBlocks
 */
class CoreNetworkEdge extends Shape
{
    /**
     * @param array{
     *     EdgeLocation?: string,
     *     Asn?: int,
     *     InsideCidrBlocks?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
