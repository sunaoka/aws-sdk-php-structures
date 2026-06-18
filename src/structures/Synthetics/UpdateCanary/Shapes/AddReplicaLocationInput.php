<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Location
 * @property VpcConfigInput|null $VpcConfig
 */
class AddReplicaLocationInput extends Shape
{
    /**
     * @param array{
     *     Location: string,
     *     VpcConfig?: VpcConfigInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
