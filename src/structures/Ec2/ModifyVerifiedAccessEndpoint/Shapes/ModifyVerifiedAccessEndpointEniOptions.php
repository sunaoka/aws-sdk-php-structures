<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'http'|'https'|null $Protocol
 * @property int<1, 65535>|null $Port
 */
class ModifyVerifiedAccessEndpointEniOptions extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'http'|'https'|null,
     *     Port?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
