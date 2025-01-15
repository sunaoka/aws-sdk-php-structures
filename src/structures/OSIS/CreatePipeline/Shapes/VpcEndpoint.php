<?php

namespace Sunaoka\Aws\Structures\OSIS\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcEndpointId
 * @property string|null $VpcId
 * @property VpcOptions|null $VpcOptions
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string|null,
     *     VpcId?: string|null,
     *     VpcOptions?: VpcOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
