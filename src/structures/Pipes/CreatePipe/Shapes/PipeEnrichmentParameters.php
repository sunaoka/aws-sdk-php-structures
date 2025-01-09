<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputTemplate
 * @property PipeEnrichmentHttpParameters $HttpParameters
 */
class PipeEnrichmentParameters extends Shape
{
    /**
     * @param array{
     *     InputTemplate?: string,
     *     HttpParameters?: PipeEnrichmentHttpParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
