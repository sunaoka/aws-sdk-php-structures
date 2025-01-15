<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property int<1, max>|null $Count
 */
class ElasticInferenceAccelerator extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Count?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
