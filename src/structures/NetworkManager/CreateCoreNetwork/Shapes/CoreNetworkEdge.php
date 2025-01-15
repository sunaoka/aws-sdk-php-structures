<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateCoreNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EdgeLocation
 * @property int|null $Asn
 * @property list<string>|null $InsideCidrBlocks
 */
class CoreNetworkEdge extends Shape
{
    /**
     * @param array{
     *     EdgeLocation?: string|null,
     *     Asn?: int|null,
     *     InsideCidrBlocks?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
