<?php

namespace Sunaoka\Aws\Structures\Interconnect\ListAttachPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DirectConnectGateway' $type
 * @property string $identifier
 * @property string $name
 */
class AttachPointDescriptor extends Shape
{
    /**
     * @param array{
     *     type: 'DirectConnectGateway',
     *     identifier: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
