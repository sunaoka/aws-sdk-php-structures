<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $PathParameterValues
 * @property array<string, string> $HeaderParameters
 * @property array<string, string> $QueryStringParameters
 */
class PipeEnrichmentHttpParameters extends Shape
{
    /**
     * @param array{
     *     PathParameterValues?: list<string>,
     *     HeaderParameters?: array<string, string>,
     *     QueryStringParameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
