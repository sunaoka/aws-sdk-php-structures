<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $HeaderParameters
 * @property list<string>|null $PathParameterValues
 * @property array<string, string>|null $QueryStringParameters
 */
class PipeEnrichmentHttpParameters extends Shape
{
    /**
     * @param array{
     *     HeaderParameters?: array<string, string>|null,
     *     PathParameterValues?: list<string>|null,
     *     QueryStringParameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
