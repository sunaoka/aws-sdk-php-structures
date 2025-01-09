<?php

namespace Sunaoka\Aws\Structures\Appstream\StopImageBuilder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STREAMING' $EndpointType
 * @property string $VpceId
 */
class AccessEndpoint extends Shape
{
    /**
     * @param array{
     *     EndpointType: 'STREAMING',
     *     VpceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
