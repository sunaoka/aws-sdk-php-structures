<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceName
 * @property string $Endpoint
 */
class PipelineDestination extends Shape
{
    /**
     * @param array{
     *     ServiceName?: string,
     *     Endpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
