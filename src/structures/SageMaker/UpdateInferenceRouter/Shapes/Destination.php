<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property 'Routable'|'Unroutable'|'Unknown'|null $RoutingStatus
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     RoutingStatus?: 'Routable'|'Unroutable'|'Unknown'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
