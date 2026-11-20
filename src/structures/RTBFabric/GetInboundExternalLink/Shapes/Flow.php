<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetInboundExternalLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property FlowPipeline $pipeline
 */
class Flow extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     pipeline: FlowPipeline
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
