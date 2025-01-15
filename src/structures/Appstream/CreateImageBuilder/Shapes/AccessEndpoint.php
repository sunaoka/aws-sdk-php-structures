<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImageBuilder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STREAMING' $EndpointType
 * @property string|null $VpceId
 */
class AccessEndpoint extends Shape
{
    /**
     * @param array{
     *     EndpointType: 'STREAMING',
     *     VpceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
