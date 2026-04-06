<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PipeEnrichmentHttpParameters|null $HttpParameters
 * @property string|null $InputTemplate
 */
class PipeEnrichmentParameters extends Shape
{
    /**
     * @param array{
     *     HttpParameters?: PipeEnrichmentHttpParameters|null,
     *     InputTemplate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
