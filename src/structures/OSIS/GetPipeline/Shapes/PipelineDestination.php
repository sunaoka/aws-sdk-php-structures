<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceName
 * @property string|null $Endpoint
 */
class PipelineDestination extends Shape
{
    /**
     * @param array{
     *     ServiceName?: string|null,
     *     Endpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
