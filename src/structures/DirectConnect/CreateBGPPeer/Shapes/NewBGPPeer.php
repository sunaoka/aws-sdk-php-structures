<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateBGPPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $asn
 * @property string|null $authKey
 * @property 'ipv4'|'ipv6'|null $addressFamily
 * @property string|null $amazonAddress
 * @property string|null $customerAddress
 */
class NewBGPPeer extends Shape
{
    /**
     * @param array{
     *     asn?: int|null,
     *     authKey?: string|null,
     *     addressFamily?: 'ipv4'|'ipv6'|null,
     *     amazonAddress?: string|null,
     *     customerAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
