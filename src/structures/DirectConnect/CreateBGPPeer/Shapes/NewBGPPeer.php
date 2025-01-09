<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateBGPPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $asn
 * @property string $authKey
 * @property 'ipv4'|'ipv6' $addressFamily
 * @property string $amazonAddress
 * @property string $customerAddress
 */
class NewBGPPeer extends Shape
{
    /**
     * @param array{
     *     asn?: int,
     *     authKey?: string,
     *     addressFamily?: 'ipv4'|'ipv6',
     *     amazonAddress?: string,
     *     customerAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
