<?php

namespace Sunaoka\Aws\Structures\OSIS\StartPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcEndpointId
 * @property string $VpcId
 * @property VpcOptions $VpcOptions
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string,
     *     VpcId?: string,
     *     VpcOptions?: VpcOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
