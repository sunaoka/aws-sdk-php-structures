<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputTemplate
 * @property PipeEnrichmentHttpParameters|null $HttpParameters
 */
class PipeEnrichmentParameters extends Shape
{
    /**
     * @param array{
     *     InputTemplate?: string|null,
     *     HttpParameters?: PipeEnrichmentHttpParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
